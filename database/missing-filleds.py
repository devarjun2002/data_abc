import os
import re

SQL_FILE = "propsyst_master.sql"  # Your SQL file
MIGRATIONS_DIR = "migrations"  # Path to Laravel migration files

def parse_sql_tables(sql_text):
    tables = {}
    table_blocks = re.findall(r"CREATE TABLE\s+`(\w+)`\s*\((.*?)\)\s*ENGINE=", sql_text, re.DOTALL)
    for table_name, block in table_blocks:
        columns = re.findall(r"`(\w+)`\s+[a-zA-Z]+(?:\([^)]+\))?", block)
        tables[table_name] = set(columns)
    return tables

def parse_migration_files(directory):
    migration_tables = {}
    for file in os.listdir(directory):
        if file.endswith(".php"):
            path = os.path.join(directory, file)
            with open(path, "r", encoding="utf-8") as f:
                content = f.read()

            match = re.search(r"Schema::create\(['\"](\w+)['\"],\s*function\s*\(Blueprint \$table\)", content)
            if not match:
                continue

            table_name = match.group(1)
            columns = set()
            lines = content.splitlines()

            for line in lines:
                col_match = re.search(r"\$table->\w+\(['\"](\w+)['\"]", line.strip())
                if col_match:
                    columns.add(col_match.group(1))
            migration_tables[table_name] = columns
    return migration_tables

def compare_tables(sql_tables, migration_tables):
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

        missing_in_migration = sql_cols - mig_cols
        extra_in_migration = mig_cols - sql_cols

        if missing_in_migration or extra_in_migration:
            report.append(f"\n⚠️ Table `{table}` column mismatch:")
            if missing_in_migration:
                report.append(f"  ➖ Missing in migration: {sorted(missing_in_migration)}")
            if extra_in_migration:
                report.append(f"  ➕ Extra in migration: {sorted(extra_in_migration)}")

    return report

if __name__ == "__main__":
    with open(SQL_FILE, "r", encoding="utf-8") as f:
        sql_content = f.read()

    sql_tables = parse_sql_tables(sql_content)
    migration_tables = parse_migration_files(MIGRATIONS_DIR)

    results = compare_tables(sql_tables, migration_tables)

    print("\n--- Comparison Report ---\n")
    if results:
        for line in results:
            print(line)
    else:
        print("✅ All tables and columns match!")
