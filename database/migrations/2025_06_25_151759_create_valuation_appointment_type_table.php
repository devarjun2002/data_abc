<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('valuation_appointment_type', function (Blueprint $table) {
            $table->id('valuation_appointment_type_id');
            $table->text('valuation_appointment_type_name')->nullable();
            $table->text('valuation_appointment_type_subject')->nullable();
            $table->smallInteger('valuation_appointment_type_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('valuation_appointment_type');
    }
};
