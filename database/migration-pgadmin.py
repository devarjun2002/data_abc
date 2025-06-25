import os
import re
import datetime

# ------------------------------ CONFIGURATION ------------------------------
SQL_FILE = 'final-after-ai.sql'
OUTPUT_DIR = 'migrations'
os.makedirs(OUTPUT_DIR, exist_ok=True)

VARCHAR_TO_TEXT_THRESHOLD = 40
DEFAULT_DECIMAL_PRECISION = (10, 2)
DB_DRIVER = os.getenv('DB_DRIVER', 'pgsql')  # change to 'mysql' if targeting MySQL

TYPE_MAPPING = {
    'tinyint': 'tinyInteger' if DB_DRIVER == 'mysql' else 'smallInteger',
    'smallint': 'smallInteger',
    'int': 'integer',
    'bigint': 'bigInteger',
    'varchar': 'string',
    'text': 'text',
    'decimal': 'decimal',
    'float': 'float',
    'double': 'double',
    'datetime': 'dateTime',
    'date': 'date',
    'timestamp': 'timestamp',
    'char': 'char',
    'boolean': 'boolean'
}

def map_type(mysql_type, col_name=''):
    type_match = re.match(r"(\w+)(\(([^)]+)\))?", mysql_type.lower())
    if not type_match:
        return ('string', None)

    base_type = type_match.group(1)
    params = type_match.group(3)
    laravel_type = TYPE_MAPPING.get(base_type, 'string')

    if base_type == 'varchar' and params:
        if int(params) > VARCHAR_TO_TEXT_THRESHOLD:
            print(f"[ℹ️  Info] Column `{col_name}` varchar({params}) -> text (due to size limit > {VARCHAR_TO_TEXT_THRESHOLD})")
            return ('text', None)

    if base_type == 'decimal':
        if params:
            precision = [p.strip() for p in params.split(',')]
            if len(precision) == 2:
                return ('decimal', f"{precision[0]}, {precision[1]}")
        return ('decimal', f"{DEFAULT_DECIMAL_PRECISION[0]}, {DEFAULT_DECIMAL_PRECISION[1]}")

    if laravel_type in ['string', 'char', 'decimal', 'float', 'double'] and params:
        return (laravel_type, params)

    return (laravel_type, None)

def generate_migration(table_name, columns):
    timestamp = datetime.datetime.now().strftime('%Y_%m_%d_%H%M%S')
    file_name = f"{timestamp}_create_{table_name}_table"
    path = os.path.join(OUTPUT_DIR, f"{file_name}.php")

    migration = f"""<?php

use Illuminate\\Database\\Migrations\\Migration;
use Illuminate\\Database\\Schema\\Blueprint;
use Illuminate\\Support\\Facades\\Schema;
use Illuminate\\Support\\Facades\\DB;

return new class extends Migration
{{
    public function up()
    {{
        Schema::create('{table_name}', function (Blueprint $table) {{
"""

    if DB_DRIVER == 'mysql':
        migration += f"            $table->engine = 'InnoDB';\n"

    for col in columns:
        name = col['name']
        type_str = col['type']
        nullable = col['nullable']
        auto_increment = col['auto_increment']
        primary = col['primary']

        if auto_increment:
            migration += f"            $table->id('{name}');\n"
        else:
            laravel_type, param = map_type(type_str, name)
            nullable_str = '->nullable()' if nullable else ''
            if param:
                migration += f"            $table->{laravel_type}('{name}', {param}){nullable_str};\n"
            else:
                migration += f"            $table->{laravel_type}('{name}'){nullable_str};\n"

        if primary and not auto_increment:
            migration += f"            $table->primary('{name}');\n"

    migration += f"""        }});\n"""

    if DB_DRIVER == 'mysql':
        migration += f"""        DB::statement("ALTER TABLE {table_name} ROW_FORMAT=DYNAMIC");\n"""

    migration += f"""    }}

    public function down()
    {{
        Schema::dropIfExists('{table_name}');
    }}
}};
"""

    with open(path, 'w', encoding='utf-8') as f:
        f.write(migration)

    print(f"[✅ Migration Generated] {file_name}.php")

def extract_create_tables(sql):
    tables = []
    create_blocks = re.findall(r'CREATE TABLE IF NOT EXISTS `(.*?)`\s*\((.*?)\)\s*ENGINE', sql, re.DOTALL)
    for full_table_name, columns_block in create_blocks:
        table_name = full_table_name.split('.')[-1].strip('`')
        column_lines = columns_block.split(',\n')
        columns = []

        for line in column_lines:
            line = line.strip()
            if line.upper().startswith('PRIMARY KEY'):
                pk_col = re.findall(r'`(\w+)`', line)
                if pk_col:
                    for col in columns:
                        if col['name'] == pk_col[0]:
                            col['primary'] = True
                continue

            col_match = re.match(r'`(\w+)`\s+([\w()]+)(.*)', line)
            if col_match:
                col_name = col_match.group(1)
                col_type = col_match.group(2)
                extras = col_match.group(3)
                columns.append({
                    'name': col_name,
                    'type': col_type,
                    'nullable': 'NULL' in extras.upper(),
                    'auto_increment': 'AUTO_INCREMENT' in extras.upper(),
                    'primary': False
                })
        tables.append({'name': table_name, 'columns': columns})
    return tables

def process_sql():
    if not os.path.exists(SQL_FILE):
        print(f"[❌ Error] File not found: {SQL_FILE}")
        return

    with open(SQL_FILE, 'r', encoding='utf-8') as f:
        sql = f.read()

    tables = extract_create_tables(sql)
    for table in tables:
        generate_migration(table['name'], table['columns'])

# Run it
process_sql()
