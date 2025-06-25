<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_access_arrangement', function (Blueprint $table) {
            $table->id('property_access_arrangement_id');
            $table->string('property_access_arrangement_name', 30)->nullable();
            $table->smallInteger('property_access_arrangement_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_access_arrangement');
    }
};
