<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sale_task_status', function (Blueprint $table) {
            $table->id('sale_task_status_id');
            $table->string('sale_task_status_name', 20)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sale_task_status');
    }
};
