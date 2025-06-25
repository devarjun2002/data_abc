<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('programming_task', function (Blueprint $table) {
            $table->id('programming_task_id');
            $table->text('programming_task_description')->nullable();
            $table->smallInteger('programming_task_severity')->nullable();
            $table->integer('programming_task_sort')->nullable();
            $table->smallInteger('programming_task_status')->nullable();
            $table->dateTime('programming_task_date_created')->nullable();
            $table->dateTime('programming_task_date_updated')->nullable();
            $table->integer('programming_task_created_by')->nullable();
            $table->integer('programming_task_updated_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('programming_task');
    }
};
