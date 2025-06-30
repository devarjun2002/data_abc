import os
import re
import datetime

# ------------------------------ CONFIGURATION ------------------------------
SQL_FILE = 'propsyst_master.sql'
OUTPUT_DIR = 'migrations'
os.makedirs(OUTPUT_DIR, exist_ok=True)

VARCHAR_TO_TEXT_THRESHOLD = 100  # use text for long varchars
DEFAULT_DECIMAL_PRECISION = (10, 2)
DB_DRIVER = os.getenv('DB_DRIVER', 'pgsql')  # set 'mysql' or 'pgsql'

TYPE_MAPPING = {
    'tinyint': 'smallInteger',
    'smallint': 'smallInteger',
    'int': 'integer',
    'bigint': 'bigInteger',
    'varchar': 'string',
    'char': 'char',
    'text': 'text',
    'decimal': 'decimal',
    'float': 'float',
    'double': 'double',
    'datetime': 'dateTime',
    'date': 'date',
    'timestamp': 'timestamp',
    'boolean': 'boolean',
}

def map_type(sql_type, col_name=''):
    type_match = re.match(r"(\w+)(?:\(([^)]+)\))?", sql_type.lower())
    if not type_match:
        return ('string', None)

    base_type = type_match.group(1)
    params = type_match.group(2)
    laravel_type = TYPE_MAPPING.get(base_type, 'string')

    if base_type == 'varchar' and params and int(params) > VARCHAR_TO_TEXT_THRESHOLD:
        return ('text', None)

    if base_type == 'decimal':
        if params and ',' in params:
            return ('decimal', params)
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

return new class extends Migration
{{
    public function up()
    {{
        Schema::create('{table_name}', function (Blueprint $table) {{
"""

    for col in columns:
        name = col['name']
        sql_type = col['type']
        nullable = col['nullable']
        auto_increment = col['auto_increment']
        primary = col['primary']

        if auto_increment:
            migration += f"            $table->increments('{name}');\n"
        else:
            laravel_type, param = map_type(sql_type, name)
            nullable_str = '->nullable()' if nullable else ''
            if param:
                migration += f"            $table->{laravel_type}('{name}', {param}){nullable_str};\n"
            else:
                migration += f"            $table->{laravel_type}('{name}'){nullable_str};\n"

        if primary and not auto_increment:
            migration += f"            $table->primary('{name}');\n"

    migration += f"""        }});
    }}

    public function down()
    {{
        Schema::dropIfExists('{table_name}');
    }}
}};
"""

    with open(path, 'w', encoding='utf-8') as f:
        f.write(migration)

    print(f"[✅ Generated] {file_name}.php")

def extract_create_tables(sql):
    tables = []
    create_blocks = re.findall(r'CREATE TABLE\s+`(\w+)`\s*\((.*?)\)\s*ENGINE=', sql, re.DOTALL)

    for table_name, block in create_blocks:
        column_lines = block.strip().split(',\n')
        columns = []

        for line in column_lines:
            line = line.strip()
            if line.upper().startswith('PRIMARY KEY'):
                pk_match = re.findall(r'`(\w+)`', line)
                for pk in pk_match:
                    for col in columns:
                        if col['name'] == pk:
                            col['primary'] = True
                continue

            col_match = re.match(r'`(\w+)`\s+([\w()]+)(.*)', line)
            if col_match:
                col_name = col_match.group(1)
                col_type = col_match.group(2)
                extras = col_match.group(3).upper()

                columns.append({
                    'name': col_name,
                    'type': col_type,
                    'nullable': 'DEFAULT NULL' in extras or 'NULL' in extras,
                    'auto_increment': 'AUTO_INCREMENT' in extras,
                    'primary': False
                })

        tables.append({'name': table_name, 'columns': columns})
    return tables

def process_sql():
    if not os.path.exists(SQL_FILE):
        print(f"[❌ Error] SQL file not found: {SQL_FILE}")
        return

    with open(SQL_FILE, 'r', encoding='utf-8') as f:
        sql = f.read()

    tables = extract_create_tables(sql)
    for table in tables:
        generate_migration(table['name'], table['columns'])

# Run it
process_sql()
