<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('timescale', function (Blueprint $table) {
            $table->id('timescale_id');
            $table->string('timescale_name', 30)->nullable();
            $table->smallInteger('timescale_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('timescale');
    }
};
