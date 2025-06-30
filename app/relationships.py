import os
import re

MODELS_DIR = 'Models'  # Adjust to your Laravel model path

RELATION_PATTERN = re.compile(
    r'public function (\w+)\s*\(\)\s*\{[^}]*?->belongsTo\(\s*([\w\\]+)::class\s*,\s*[\'"]([^\'"]+)[\'"]\s*,\s*[\'"]([^\'"]+)[\'"]\s*\)',
    re.DOTALL
)
CLASS_PATTERN = re.compile(r'class\s+(\w+)\s+extends')

def find_php_files(base_dir):
    files = {}
    for root, _, filenames in os.walk(base_dir):
        for file in filenames:
            if file.endswith('.php'):
                path = os.path.join(root, file)
                class_name = file[:-4]
                with open(path, 'r', encoding='utf-8') as f:
                    content = f.read()
                files[class_name] = {
                    'path': path,
                    'content': content
                }
    return files

def ensure_reverse_comment(lines):
    for i, line in enumerate(lines):
        if '// Reverse Relationships' in line:
            return i
    for i in reversed(range(len(lines))):
        if line.strip() == '}':
            lines.insert(i, '    // Reverse Relationships')
            return i
    return -1

def camel_case(name):
    parts = name.split('_')
    return parts[0] + ''.join(x.capitalize() for x in parts[1:])

def pluralize(name):
    if name.endswith('y'):
        return name[:-1] + 'ies'
    elif name.endswith('s'):
        return name + 'es'
    else:
        return name + 's'

def generate_reverse_function(func_name, source_class, foreign_key, owner_key):
    rel_name = pluralize(camel_case(source_class[0].lower() + source_class[1:]))
    return f"""
    public function {rel_name}()
    {{
        return $this->hasMany({source_class}::class, '{foreign_key}', '{owner_key}');
    }}
"""

def reverse_exists(content, source_class):
    rel_name = pluralize(camel_case(source_class[0].lower() + source_class[1:]))
    return f'function {rel_name}(' in content

def process_relationships(models):
    for source_class, data in models.items():
        content = data['content']
        matches = RELATION_PATTERN.findall(content)

        for func_name, target_class, foreign_key, owner_key in matches:
            target_class_name = target_class.split('\\')[-1]
            if target_class_name not in models:
                print(f"⚠️ Target model not found for: {target_class_name}")
                continue

            target = models[target_class_name]
            target_path = target['path']
            target_content = target['content']

            if reverse_exists(target_content, source_class):
                continue  # Already has reverse

            lines = target_content.splitlines()
            insert_index = ensure_reverse_comment(lines)

            reverse_func = generate_reverse_function(func_name, source_class, foreign_key, owner_key)
            lines.insert(insert_index + 1, reverse_func.strip())

            with open(target_path, 'w', encoding='utf-8') as f:
                f.write('\n'.join(lines))
            
            print(f"✅ Added reverse to {target_class_name}.php for {source_class}")

if __name__ == '__main__':
    print("🔍 Scanning models...")
    model_data = find_php_files(MODELS_DIR)
    print("🔄 Generating reverse relationships in target models...")
    process_relationships(model_data)
    print("✅ Completed.")
