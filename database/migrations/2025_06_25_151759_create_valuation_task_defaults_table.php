<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('valuation_task_defaults', function (Blueprint $table) {
            $table->id('valuation_task_defaults_id');
            $table->smallInteger('valuation_task_defaults_type')->nullable();
            $table->text('valuation_task_defaults_name')->nullable();
            $table->smallInteger('valuation_task_defaults_status')->nullable();
            $table->text('valuation_task_defaults_notes')->nullable();
            $table->text('valuation_task_defaults_description')->nullable();
            $table->smallInteger('valuation_task_defaults_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('valuation_task_defaults');
    }
};
