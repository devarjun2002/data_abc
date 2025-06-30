import os
import re

SQL_FILE = "propsyst_master.sql"
MIGRATIONS_DIR = "migrations"

def parse_sql_tables(sql_text):
    tables = {}
    table_blocks = re.findall(r"CREATE TABLE\s+`(\w+)`\s*\((.*?)\)\s*ENGINE=", sql_text, re.DOTALL)
    for table_name, block in table_blocks:
        columns = re.findall(r"`(\w+)`\s+[a-zA-Z]+(?:\([^)]+\))?", block)
        tables[table_name] = set(columns)
    return tables

def parse_migration_files(directory):
    migration_tables = {}
    migration_paths = {}

    for file in os.listdir(directory):
        if file.endswith(".php"):
            path = os.path.join(directory, file)
            with open(path, "r", encoding="utf-8") as f:
                content = f.read()

            match = re.search(r"Schema::create\(['\"](\w+)['\"],\s*function\s*\(Blueprint \$table\)", content)
            if not match:
                continue

            table_name = match.group(1)
            columns = set(re.findall(r"\$table->\w+\(['\"](\w+)['\"]", content))
            migration_tables[table_name] = columns
            migration_paths[table_name] = path

    return migration_tables, migration_paths

def infer_column_type(col_name):
    col_name = col_name.lower()
    if "id" in col_name:
        return f"$table->unsignedBigInteger('{col_name}')->nullable();"
    elif "name" in col_name or "title" in col_name:
        return f"$table->string('{col_name}')->nullable();"
    elif "desc" in col_name or "note" in col_name:
        return f"$table->text('{col_name}')->nullable();"
    elif "status" in col_name or "type" in col_name or "sort" in col_name:
        return f"$table->smallInteger('{col_name}')->nullable();"
    elif "date" in col_name:
        return f"$table->date('{col_name}')->nullable();"
    else:
        return f"$table->string('{col_name}')->nullable();"

def update_migration_file(file_path, missing_columns):
    with open(file_path, "r", encoding="utf-8") as f:
        lines = f.readlines()

    insert_index = None
    for i, line in enumerate(lines):
        if "function (Blueprint $table)" in line:
            insert_index = i
        if insert_index and line.strip().startswith("});"):
            insert_index = i
            break

    if insert_index:
        for col in sorted(missing_columns):
            lines.insert(insert_index, "            " + infer_column_type(col) + "\n")

        with open(file_path, "w", encoding="utf-8") as f:
            f.writelines(lines)

def compare_and_update(sql_tables, migration_tables, migration_paths):
    all_tables = set(sql_tables) | set(migration_tables)

    report = []
    for table in sorted(all_tables):
        sql_cols = sql_tables.get(table)
        mig_cols = migration_tables.get(table)

        if not sql_cols:
            report.append(f"❌ Table `{table}` is missing in SQL file.")
            continue
        if not mig_cols:
            report.append(f"❌ Table `{table}` is missing in Migrations.")
            continue

        missing = sql_cols - mig_cols
        extra = mig_cols - sql_cols

        if missing or extra:
            report.append(f"\n⚠️ Table `{table}` mismatch:")
            if missing:
                report.append(f"  ➖ Missing in migration: {sorted(missing)}")
                update_migration_file(migration_paths[table], missing)
                report.append(f"  ✅ Updated `{migration_paths[table]}` with missing columns.")
            if extra:
                report.append(f"  ➕ Extra in migration: {sorted(extra)}")

    return report

if __name__ == "__main__":
    with open(SQL_FILE, "r", encoding="utf-8") as f:
        sql_content = f.read()

    sql_tables = parse_sql_tables(sql_content)
    migration_tables, migration_paths = parse_migration_files(MIGRATIONS_DIR)

    result = compare_and_update(sql_tables, migration_tables, migration_paths)

    print("\n--- Migration Update Report ---\n")
    if result:
        print("\n".join(result))
    else:
        print("✅ All tables and columns match!")
