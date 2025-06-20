<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('letting_task_status', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('letting_task_status_id');
            $table->string('letting_task_status_name', 20)->nullable();
        });
        DB::statement("ALTER TABLE letting_task_status ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('letting_task_status');
    }
};
