<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employee_department', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('employee_department_id');
            $table->text('employee_department_name')->nullable();
            $table->text('employee_department_name2')->nullable();
        });
        DB::statement("ALTER TABLE employee_department ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('employee_department');
    }
};
