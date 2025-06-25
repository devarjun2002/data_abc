<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_room', function (Blueprint $table) {
            $table->id('property_room_id');
            $table->integer('property_id')->nullable();
            $table->text('property_room_name')->nullable();
            $table->text('property_room_description')->nullable();
            $table->decimal('property_room_length', 10, 2)->nullable();
            $table->decimal('property_room_width', 10, 2)->nullable();
            $table->smallInteger('property_room_dimension_unit')->nullable();
            $table->text('property_room_dimension_text')->nullable();
            $table->text('property_room_images_url')->nullable();
            $table->smallInteger('property_room_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_room');
    }
};
