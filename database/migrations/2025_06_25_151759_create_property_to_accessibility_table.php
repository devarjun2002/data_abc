<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_to_accessibility', function (Blueprint $table) {
            $table->id('property_to_accessibility_id');
            $table->integer('property_id')->nullable();
            $table->integer('property_accessibility_id')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_to_accessibility');
    }
};
