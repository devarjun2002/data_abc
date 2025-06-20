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
            $table->engine = 'InnoDB';
            $table->increments('programming_task_status_id');
            $table->text('programming_task_status_name')->nullable();
            $table->tinyInteger('programming_task_status_sort')->nullable();
        });
        DB::statement("ALTER TABLE programming_task_status ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('programming_task_status');
    }
};
