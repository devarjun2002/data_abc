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
            $table->id('employee_department_id');
            $table->text('employee_department_name')->nullable();
            $table->text('employee_department_name2')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employee_department');
    }
};
