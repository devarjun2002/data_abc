<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('utility_meter_location', function (Blueprint $table) {
            $table->id('utility_meter_location_id');
            $table->text('utility_meter_location_name')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('utility_meter_location');
    }
};
