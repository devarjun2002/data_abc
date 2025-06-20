<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_invoice', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('invoice_id');
            $table->string('invoice_token', 40)->nullable();
            $table->integer('invoice_customer_type')->nullable();
            $table->integer('invoice_customer')->nullable();
            $table->date('invoice_date')->nullable();
            $table->date('invoice_due_date')->nullable();
            $table->integer('invoice_property_id')->nullable();
            $table->integer('invoice_development_id')->nullable();
            $table->integer('invoice_tenancy_id')->nullable();
            $table->integer('invoice_branch')->nullable();
            $table->tinyInteger('invoice_payment_terms')->nullable();
            $table->text('invoice_notes')->nullable();
            $table->decimal('invoice_total_amount_exc_vat')->nullable();
            $table->decimal('invoice_total_vat_amount')->nullable();
            $table->decimal('invoice_total_amount_paid')->nullable();
            $table->tinyInteger('invoice_posted')->nullable();
            $table->tinyInteger('invoice_overdue_reminders')->nullable();
            $table->dateTime('invoice_date_created')->nullable();
            $table->dateTime('invoice_date_updated')->nullable();
            $table->dateTime('invoice_date_posted')->nullable();
            $table->integer('invoice_created_by')->nullable();
            $table->integer('invoice_updated_by')->nullable();
            $table->integer('invoice_posted_by')->nullable();
        });
        DB::statement("ALTER TABLE accounts_invoice ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('accounts_invoice');
    }
};
