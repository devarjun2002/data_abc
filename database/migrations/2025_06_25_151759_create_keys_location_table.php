<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('keys_location', function (Blueprint $table) {
            $table->id('keys_location_id');
            $table->smallInteger('keys_location_name')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('keys_location');
    }
};
