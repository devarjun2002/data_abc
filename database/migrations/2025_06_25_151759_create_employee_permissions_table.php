<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employee_permissions', function (Blueprint $table) {
            $table->id('employee_permissions_id');
            $table->text('employee_permissions_name')->nullable();
            $table->smallInteger('employee_permissions_category')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employee_permissions');
    }
};
