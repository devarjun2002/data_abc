<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employee_to_role', function (Blueprint $table) {
            $table->id('employee_to_role_id');
            $table->integer('employee_id')->nullable();
            $table->integer('employee_role_id')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employee_to_role');
    }
};
