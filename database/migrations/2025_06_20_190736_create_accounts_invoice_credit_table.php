<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_invoice_credit', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('invoice_credit_id');
            $table->string('invoice_credit_token', 40)->nullable();
            $table->integer('invoice_credit_customer_type')->nullable();
            $table->integer('invoice_credit_customer')->nullable();
            $table->date('invoice_credit_date')->nullable();
            $table->integer('invoice_credit_property_id')->nullable();
            $table->integer('invoice_credit_development_id')->nullable();
            $table->integer('invoice_credit_tenancy_id')->nullable();
            $table->integer('invoice_credit_branch')->nullable();
            $table->text('invoice_credit_notes')->nullable();
            $table->decimal('invoice_credit_total_amount_exc_vat')->nullable();
            $table->decimal('invoice_credit_total_vat_amount')->nullable();
            $table->tinyInteger('invoice_credit_posted')->nullable();
            $table->integer('invoice_credit_invoice_id')->nullable();
            $table->dateTime('invoice_credit_date_created')->nullable();
            $table->dateTime('invoice_credit_date_updated')->nullable();
            $table->dateTime('invoice_credit_date_posted')->nullable();
            $table->integer('invoice_credit_created_by')->nullable();
            $table->integer('invoice_credit_updated_by')->nullable();
            $table->integer('invoice_credit_posted_by')->nullable();
        });
        DB::statement("ALTER TABLE accounts_invoice_credit ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('accounts_invoice_credit');
    }
};
