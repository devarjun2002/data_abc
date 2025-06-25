<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employee_group_delete', function (Blueprint $table) {
            $table->id('employee_group_id');
            $table->string('employee_group_name', 20)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employee_group_delete');
    }
};
