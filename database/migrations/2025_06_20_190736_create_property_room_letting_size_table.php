<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_room_letting_size', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('property_room_letting_size_id');
            $table->string('property_room_letting_size_name', 6)->nullable();
        });
        DB::statement("ALTER TABLE property_room_letting_size ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_room_letting_size');
    }
};
