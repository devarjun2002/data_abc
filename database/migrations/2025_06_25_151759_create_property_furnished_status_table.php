<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_furnished_status', function (Blueprint $table) {
            $table->id('property_furnished_status_id');
            $table->string('property_furnished_status_name', 40)->nullable();
            $table->smallInteger('property_furnished_status_rightmove')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_furnished_status');
    }
};
