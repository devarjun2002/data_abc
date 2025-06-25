<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('referral', function (Blueprint $table) {
            $table->id('referral_id');
            $table->smallInteger('referral_type')->nullable();
            $table->smallInteger('referral_sale_purchase')->nullable();
            $table->integer('referral_customer_type')->nullable();
            $table->integer('referral_customer')->nullable();
            $table->text('referral_customer_email')->nullable();
            $table->integer('referral_directory_company')->nullable();
            $table->integer('referral_property')->nullable();
            $table->integer('referral_valuation')->nullable();
            $table->text('referral_notes')->nullable();
            $table->text('referral_notes_private')->nullable();
            $table->text('referral_notes_directory_company')->nullable();
            $table->integer('referral_employee')->nullable();
            $table->integer('referral_status')->nullable();
            $table->text('referral_commission_our_invoice_ref')->nullable();
            $table->decimal('referral_commission_amount', 10, 2)->nullable();
            $table->date('referral_commission_date_paid')->nullable();
            $table->decimal('referral_total_amount_paid', 10, 2)->nullable();
            $table->smallInteger('referral_total_number_of_payments')->nullable();
            $table->decimal('referral_total_amount_paid_employee', 10, 2)->nullable();
            $table->smallInteger('referral_total_number_of_payments_employee')->nullable();
            $table->dateTime('referral_date_created')->nullable();
            $table->dateTime('referral_date_updated')->nullable();
            $table->integer('referral_created_by')->nullable();
            $table->integer('referral_updated_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('referral');
    }
};
