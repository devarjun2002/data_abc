<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employee_to_permissions', function (Blueprint $table) {
            $table->id('employee_to_permissions_id');
            $table->integer('employee_id')->nullable();
            $table->smallInteger('employee_permissions_id')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employee_to_permissions');
    }
};
