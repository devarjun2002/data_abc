<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_media', function (Blueprint $table) {
            $table->id('property_media_id');
            $table->integer('property_media_property_id')->nullable();
            $table->text('property_media_link')->nullable();
            $table->smallInteger('property_media_type')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_media');
    }
};
