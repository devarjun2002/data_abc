<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('vehicle', function (Blueprint $table) {
            $table->id('vehicle_id');
            $table->string('vehicle_registration', 10)->nullable();
            $table->string('vehicle_make_model', 30)->nullable();
            $table->smallInteger('vehicle_archived')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vehicle');
    }
};
