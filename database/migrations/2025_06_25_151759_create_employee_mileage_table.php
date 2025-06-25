<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employee_mileage', function (Blueprint $table) {
            $table->id('employee_mileage_id');
            $table->integer('employee_mileage_employee_id')->nullable();
            $table->integer('employee_mileage_vehicle_id')->nullable();
            $table->date('employee_mileage_journey_date')->nullable();
            $table->string('employee_mileage_start_postcode', 8)->nullable();
            $table->string('employee_mileage_end_postcode', 8)->nullable();
            $table->decimal('employee_mileage_mileage', 10, 2)->nullable();
            $table->text('employee_mileage_notes')->nullable();
            $table->dateTime('employee_mileage_date_created')->nullable();
            $table->integer('employee_mileage_created_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employee_mileage');
    }
};
