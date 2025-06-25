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
            $table->id('task_status_id');
            $table->string('task_status_name', 30)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('task_status');
    }
};
