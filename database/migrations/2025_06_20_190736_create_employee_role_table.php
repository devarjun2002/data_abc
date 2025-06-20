<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employee_role', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('employee_role_id');
            $table->text('employee_role_name')->nullable();
        });
        DB::statement("ALTER TABLE employee_role ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('employee_role');
    }
};
