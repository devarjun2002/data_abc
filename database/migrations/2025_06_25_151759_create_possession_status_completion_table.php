<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('possession_status_completion', function (Blueprint $table) {
            $table->id('possession_status_completion_id');
            $table->string('possession_status_completion_name', 30)->nullable();
            $table->smallInteger('possession_status_completion_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('possession_status_completion');
    }
};
