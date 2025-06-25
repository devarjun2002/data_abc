<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_room_letting', function (Blueprint $table) {
            $table->id('property_room_letting_id');
            $table->integer('property_id')->nullable();
            $table->smallInteger('property_room_letting_sort')->nullable();
            $table->integer('property_room_letting_status')->nullable();
            $table->decimal('property_room_letting_rent', 10, 2)->nullable();
            $table->integer('property_room_letting_rent_frequency')->nullable();
            $table->decimal('property_room_letting_deposit', 10, 2)->nullable();
            $table->smallInteger('property_room_letting_size')->nullable();
            $table->smallInteger('property_room_letting_floor')->nullable();
            $table->smallInteger('property_room_letting_en_suite')->nullable();
            $table->smallInteger('property_room_letting_furnished')->nullable();
            $table->date('property_room_letting_available_from')->nullable();
            $table->smallInteger('property_room_letting_gender')->nullable();
            $table->date('property_room_letting_dob')->nullable();
            $table->text('property_room_letting_profession')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_room_letting');
    }
};
