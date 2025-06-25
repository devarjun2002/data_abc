<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_floor', function (Blueprint $table) {
            $table->id('property_floor_id');
            $table->string('property_floor_name', 20)->nullable();
            $table->smallInteger('property_floor_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_floor');
    }
};
