<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('valuation_task', function (Blueprint $table) {
            $table->id('valuation_task_id');
            $table->integer('valuation_id')->nullable();
            $table->text('valuation_task_name')->nullable();
            $table->smallInteger('valuation_task_status')->nullable();
            $table->date('valuation_task_completed_date')->nullable();
            $table->text('valuation_task_notes_private')->nullable();
            $table->smallInteger('valuation_task_sort')->nullable();
            $table->dateTime('valuation_task_date_updated')->nullable();
            $table->integer('valuation_task_updated_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('valuation_task');
    }
};
