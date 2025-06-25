<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('application_task_type', function (Blueprint $table) {
            $table->id('application_task_type_id');
            $table->string('application_task_type_name', 15)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('application_task_type');
    }
};
