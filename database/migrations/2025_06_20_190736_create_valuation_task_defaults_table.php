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
            $table->engine = 'InnoDB';
            $table->increments('valuation_task_defaults_id');
            $table->tinyInteger('valuation_task_defaults_type')->nullable();
            $table->text('valuation_task_defaults_name')->nullable();
            $table->tinyInteger('valuation_task_defaults_status')->nullable();
            $table->text('valuation_task_defaults_notes')->nullable();
            $table->text('valuation_task_defaults_description')->nullable();
            $table->tinyInteger('valuation_task_defaults_sort')->nullable();
        });
        DB::statement("ALTER TABLE valuation_task_defaults ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('valuation_task_defaults');
    }
};
