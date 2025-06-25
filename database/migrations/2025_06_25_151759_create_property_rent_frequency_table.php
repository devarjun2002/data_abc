<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_rent_frequency', function (Blueprint $table) {
            $table->integer('property_rent_frequency_id')->nullable();
            $table->primary('property_rent_frequency_id');
            $table->text('property_rent_frequency_name')->nullable();
            $table->smallInteger('property_rent_frequency_sort')->nullable();
            $table->string('property_rent_frequency_short', 10)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_rent_frequency');
    }
};
