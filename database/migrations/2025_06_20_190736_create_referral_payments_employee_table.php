<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('referral_payments_employee', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('referral_payments_employee_id');
            $table->integer('referral_payments_employee_referral_id')->nullable();
            $table->tinyInteger('referral_payments_employee_payment_type')->nullable();
            $table->integer('referral_payments_employee_employee_id')->nullable();
            $table->decimal('referral_payments_employee_amount')->nullable();
            $table->date('referral_payments_employee_date_paid')->nullable();
            $table->dateTime('referral_payments_employee_date_created')->nullable();
            $table->dateTime('referral_payments_employee_date_updated')->nullable();
            $table->integer('referral_payments_employee_created_by')->nullable();
            $table->integer('referral_payments_employee_updated_by')->nullable();
        });
        DB::statement("ALTER TABLE referral_payments_employee ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('referral_payments_employee');
    }
};
