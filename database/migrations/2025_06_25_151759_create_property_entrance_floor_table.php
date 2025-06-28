<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_entrance_floor', function (Blueprint $table) {
            $table->id('property_entrance_floor_id');
            $table->text('property_entrance_floor_name')->nullable();
            $table->smallInteger('property_entrance_floor_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_entrance_floor');
    }
};
