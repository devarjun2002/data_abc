<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('branch_opening_hours', function (Blueprint $table) {
            $table->id('branch_opening_hours_id');
            $table->integer('branch_id')->nullable();
            $table->smallInteger('branch_opening_hours_day')->nullable();
            $table->string('branch_opening_hours_open_time')->nullable();
            $table->string('branch_opening_hours_close_time')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('branch_opening_hours');
    }
};
