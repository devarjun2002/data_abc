<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('letting_task', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('letting_task_id');
            $table->integer('tenancy_id')->nullable();
            $table->tinyInteger('letting_task_stage')->nullable();
            $table->text('letting_task_name')->nullable();
            $table->tinyInteger('letting_task_status')->nullable();
            $table->text('letting_task_notes')->nullable();
            $table->date('letting_task_date_completed')->nullable();
            $table->tinyInteger('letting_task_sort')->nullable();
        });
        DB::statement("ALTER TABLE letting_task ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('letting_task');
    }
};
