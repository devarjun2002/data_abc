<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('application_task_defaults', function (Blueprint $table) {
            $table->id('application_task_defaults_id');
            $table->smallInteger('application_task_defaults_type')->nullable();
            $table->text('application_task_defaults_name')->nullable();
            $table->smallInteger('application_task_defaults_status')->nullable();
            $table->text('application_task_defaults_notes')->nullable();
            $table->text('application_task_defaults_description')->nullable();
            $table->smallInteger('application_task_defaults_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('application_task_defaults');
    }
};
