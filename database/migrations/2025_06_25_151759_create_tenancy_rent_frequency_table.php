<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenancy_rent_frequency', function (Blueprint $table) {
            $table->id('tenancy_rent_frequency_id');
            $table->string('tenancy_rent_frequency_name', 25)->nullable();
            $table->smallInteger('tenancy_rent_frequency_sort')->nullable();
            $table->text('tenancy_rent_frequency_description')->nullable();
            $table->string('tenancy_rent_frequency_short', 10)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenancy_rent_frequency');
    }
};
