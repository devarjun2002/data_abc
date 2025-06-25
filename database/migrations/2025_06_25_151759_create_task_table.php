<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->id('task_id');
            $table->text('task_description')->nullable();
            $table->date('task_date_tbc')->nullable();
            $table->date('task_deadline')->nullable();
            $table->smallInteger('task_routine')->nullable();
            $table->smallInteger('task_status')->nullable();
            $table->smallInteger('task_sort')->nullable();
            $table->dateTime('task_date_created')->nullable();
            $table->integer('task_created_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('task');
    }
};
