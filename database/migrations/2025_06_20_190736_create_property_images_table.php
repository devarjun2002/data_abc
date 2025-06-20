<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_images', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('image_id');
            $table->integer('property_id')->nullable();
            $table->text('filename')->nullable();
            $table->text('caption')->nullable();
            $table->integer('filesize')->nullable();
            $table->dateTime('date_added')->nullable();
            $table->string('sort')->nullable();
            $table->string('sort_highlights')->nullable();
            $table->tinyInteger('floor_plan')->nullable();
        });
        DB::statement("ALTER TABLE property_images ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_images');
    }
};
