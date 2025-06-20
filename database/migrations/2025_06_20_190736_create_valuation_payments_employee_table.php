<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('valuation_payments_employee', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('valuation_payments_employee_id');
            $table->integer('valuation_payments_employee_valuation_id')->nullable();
            $table->tinyInteger('valuation_payments_employee_payment_type')->nullable();
            $table->integer('valuation_payments_employee_employee_id')->nullable();
            $table->decimal('valuation_payments_employee_amount')->nullable();
            $table->date('valuation_payments_employee_date_paid')->nullable();
            $table->dateTime('valuation_payments_employee_date_created')->nullable();
            $table->dateTime('valuation_payments_employee_date_updated')->nullable();
            $table->integer('valuation_payments_employee_created_by')->nullable();
            $table->integer('valuation_payments_employee_updated_by')->nullable();
        });
        DB::statement("ALTER TABLE valuation_payments_employee ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('valuation_payments_employee');
    }
};
