<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('task_status', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('task_status_id');
            $table->string('task_status_name', 30)->nullable();
        });
        DB::statement("ALTER TABLE task_status ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('task_status');
    }
};
