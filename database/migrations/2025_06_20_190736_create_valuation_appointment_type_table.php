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
            $table->engine = 'InnoDB';
            $table->increments('valuation_appointment_type_id');
            $table->text('valuation_appointment_type_name')->nullable();
            $table->text('valuation_appointment_type_subject')->nullable();
            $table->tinyInteger('valuation_appointment_type_sort')->nullable();
        });
        DB::statement("ALTER TABLE valuation_appointment_type ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('valuation_appointment_type');
    }
};
