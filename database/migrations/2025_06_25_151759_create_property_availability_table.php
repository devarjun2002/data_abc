<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_availability', function (Blueprint $table) {
            $table->id('property_availability_id');
            $table->string('property_availability_name', 10)->nullable();
            $table->string('property_availability_display_name', 20)->nullable();
            $table->text('property_availability_display_name2')->nullable();
            $table->string('property_availability_seo_name', 30)->nullable();
            $table->string('property_availability_xml_name', 10)->nullable();
            $table->smallInteger('property_availability_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_availability');
    }
};
