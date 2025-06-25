<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('referral_payments', function (Blueprint $table) {
            $table->id('referral_payments_id');
            $table->integer('referral_payments_referral_id')->nullable();
            $table->decimal('referral_payments_amount', 10, 2)->nullable();
            $table->date('referral_payments_date_paid')->nullable();
            $table->dateTime('referral_payments_date_created')->nullable();
            $table->dateTime('referral_payments_date_updated')->nullable();
            $table->integer('referral_payments_created_by')->nullable();
            $table->integer('referral_payments_updated_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('referral_payments');
    }
};
