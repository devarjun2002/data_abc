<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('programming_task_status', function (Blueprint $table) {
            $table->id('programming_task_status_id');
            $table->text('programming_task_status_name')->nullable();
            $table->smallInteger('programming_task_status_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('programming_task_status');
    }
};
