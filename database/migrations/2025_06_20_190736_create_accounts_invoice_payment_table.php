<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_invoice_payment', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('invoice_payment_id');
            $table->date('invoice_payment_date')->nullable();
            $table->decimal('invoice_payment_amount')->nullable();
            $table->tinyInteger('invoice_payment_method')->nullable();
            $table->integer('invoice_payment_invoice_id')->nullable();
            $table->text('invoice_payment_notes')->nullable();
            $table->tinyInteger('invoice_payment_type')->nullable();
            $table->integer('invoice_payment_type_id')->nullable();
            $table->tinyInteger('invoice_payment_use_balance')->nullable();
            $table->integer('invoice_payment_tenancy_id')->nullable();
            $table->dateTime('invoice_payment_date_created')->nullable();
            $table->dateTime('invoice_payment_date_updated')->nullable();
            $table->integer('invoice_payment_created_by')->nullable();
            $table->integer('invoice_payment_updated_by')->nullable();
        });
        DB::statement("ALTER TABLE accounts_invoice_payment ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('accounts_invoice_payment');
    }
};
