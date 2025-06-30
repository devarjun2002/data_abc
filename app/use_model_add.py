import os
import re

# Path to your models folder
MODELS_DIR = 'Models'  # Update to the correct directory if needed

# Regex to match belongsTo(..., SomeModel::class)
RELATION_CLASS_PATTERN = re.compile(
    r'->belongsTo\(\s*([\w\\]+)::class'
)

# Regex to find existing "use App\Models\SomeModel;" statements
USE_STATEMENT_PATTERN = re.compile(r'^use\s+App\\Models\\([\w\\]+);', re.MULTILINE)

# Regex to find the namespace line to insert use statements after
NAMESPACE_LINE_PATTERN = re.compile(r'^namespace\s+App\\Models;', re.MULTILINE)


def find_php_files(base_dir):
    php_files = []
    for root, _, files in os.walk(base_dir):
        for file in files:
            if file.endswith('.php'):
                php_files.append(os.path.join(root, file))
    return php_files


def update_use_statements(file_path):
    with open(file_path, 'r', encoding='utf-8') as f:
        content = f.read()

    # Find all related classes used in belongsTo()
    related_classes = set(RELATION_CLASS_PATTERN.findall(content))

    if not related_classes:
        return  # No relationships found

    # Find already existing "use" statements
    existing_uses = set(USE_STATEMENT_PATTERN.findall(content))

    # Identify which use statements are missing
    missing_uses = [cls for cls in related_classes if cls not in existing_uses]

    if not missing_uses:
        return  # All use statements already present

    # Find the insertion point after the namespace line
    namespace_match = NAMESPACE_LINE_PATTERN.search(content)
    if not namespace_match:
        print(f"⚠️ Namespace not found in {file_path}")
        return

    insert_index = namespace_match.end()
    use_lines = ''.join(f'\nuse App\\Models\\{cls};' for cls in sorted(missing_uses))

    # Insert use statements into content
    updated_content = content[:insert_index] + use_lines + content[insert_index:]

    # Write updated content back to the file
    with open(file_path, 'w', encoding='utf-8') as f:
        f.write(updated_content)

    print(f"✅ Updated: {os.path.basename(file_path)}")


if __name__ == '__main__':
    print("🔍 Scanning and updating model files...")
    php_files = find_php_files(MODELS_DIR)
    for file_path in php_files:
        update_use_statements(file_path)
    print("✅ Done.")
