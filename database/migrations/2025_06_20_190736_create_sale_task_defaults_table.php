<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sale_task_defaults', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('sale_task_defaults_id');
            $table->tinyInteger('sale_task_defaults_type')->nullable();
            $table->text('sale_task_defaults_name')->nullable();
            $table->tinyInteger('sale_task_defaults_status')->nullable();
            $table->text('sale_task_defaults_notes')->nullable();
            $table->text('sale_task_defaults_description')->nullable();
            $table->tinyInteger('sale_task_defaults_sort')->nullable();
        });
        DB::statement("ALTER TABLE sale_task_defaults ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('sale_task_defaults');
    }
};
