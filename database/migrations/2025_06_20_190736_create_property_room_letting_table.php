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
            $table->engine = 'InnoDB';
            $table->increments('property_room_letting_id');
            $table->integer('property_id')->nullable();
            $table->tinyInteger('property_room_letting_sort')->nullable();
            $table->integer('property_room_letting_status')->nullable();
            $table->decimal('property_room_letting_rent')->nullable();
            $table->integer('property_room_letting_rent_frequency')->nullable();
            $table->decimal('property_room_letting_deposit')->nullable();
            $table->tinyInteger('property_room_letting_size')->nullable();
            $table->tinyInteger('property_room_letting_floor')->nullable();
            $table->tinyInteger('property_room_letting_en_suite')->nullable();
            $table->tinyInteger('property_room_letting_furnished')->nullable();
            $table->date('property_room_letting_available_from')->nullable();
            $table->tinyInteger('property_room_letting_gender')->nullable();
            $table->date('property_room_letting_dob')->nullable();
            $table->text('property_room_letting_profession')->nullable();
        });
        DB::statement("ALTER TABLE property_room_letting ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_room_letting');
    }
};
