<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_viewing_arrangement', function (Blueprint $table) {
            $table->id('property_viewing_arrangement_id');
            $table->string('property_viewing_arrangement_name', 20)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_viewing_arrangement');
    }
};
