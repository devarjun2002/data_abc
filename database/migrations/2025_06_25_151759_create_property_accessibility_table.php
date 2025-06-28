<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_accessibility', function (Blueprint $table) {
            $table->id('property_accessibility_id');
            $table->string('property_accessibility_name', 40)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_accessibility');
    }
};
