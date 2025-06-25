<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('valuation_availability', function (Blueprint $table) {
            $table->id('valuation_availability_id');
            $table->string('valuation_availability_name', 20)->nullable();
            $table->smallInteger('valuation_availability_archived')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('valuation_availability');
    }
};
