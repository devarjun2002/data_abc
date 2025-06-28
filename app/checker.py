import os
import re

MODELS_DIR = 'Models'  # Update to the correct path if different

# Matches relationship functions like belongsTo(..., 'foreign_key', 'local_key')
RELATION_PATTERN = re.compile(
    r'public function (\w+)\s*\(\)\s*\{[^}]*?->(belongsTo|hasOne|hasMany|belongsToMany)\s*\(\s*[^,]+,\s*[\'"]([^\'"]+)[\'"](?:,\s*[\'"]([^\'"]+)[\'"])?',
    re.DOTALL
)

# Matches the $fillable property
FILLABLE_PATTERN = re.compile(r'protected \$fillable\s*=\s*\[((?:.|\n)*?)\];', re.MULTILINE)

# Matches the $primaryKey definition
PRIMARY_KEY_PATTERN = re.compile(r'protected \$primaryKey\s*=\s*[\'"](\w+)[\'"];')

# Extract array strings like 'field_name'
ARRAY_STRING_PATTERN = re.compile(r'["\']([\w\d_]+)["\']')


def extract_fillables(content):
    match = FILLABLE_PATTERN.search(content)
    if not match:
        return []
    array_body = match.group(1)
    return ARRAY_STRING_PATTERN.findall(array_body)


def extract_primary_key(content):
    match = PRIMARY_KEY_PATTERN.search(content)
    return match.group(1) if match else None


def extract_relationships(content):
    return RELATION_PATTERN.findall(content)


def analyze_models():
    for root, _, files in os.walk(MODELS_DIR):
        for file in files:
            if file.endswith('.php'):
                path = os.path.join(root, file)
                with open(path, 'r', encoding='utf-8') as f:
                    content = f.read()

                fillables = extract_fillables(content)
                primary_key = extract_primary_key(content)
                relationships = extract_relationships(content)

                for rel in relationships:
                    method_name, rel_type, foreign_key, local_key = rel

                    key_ok = (
                        foreign_key in fillables or
                        foreign_key == primary_key or
                        (local_key and (local_key in fillables or local_key == primary_key))
                    )

                    if not key_ok:
                        print(f'File: {file} | Relationship: {method_name} | Missing: {foreign_key}, {local_key or "N/A"}')


if __name__ == '__main__':
    analyze_models()
