<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_transaction', function (Blueprint $table) {
            $table->id('transaction_id');
            $table->smallInteger('transaction_nominal_code')->nullable();
            $table->smallInteger('transaction_type')->nullable();
            $table->integer('transaction_customer_type')->nullable();
            $table->integer('transaction_customer')->nullable();
            $table->date('transaction_date')->nullable();
            $table->string('transaction_due_date', 10)->nullable();
            $table->text('transaction_reference')->nullable();
            $table->text('transaction_details')->nullable();
            $table->text('transaction_notes')->nullable();
            $table->integer('transaction_property')->nullable();
            $table->integer('transaction_development')->nullable();
            $table->integer('transaction_tenancy')->nullable();
            $table->integer('transaction_branch')->nullable();
            $table->decimal('transaction_debit', 10, 2)->nullable();
            $table->decimal('transaction_credit', 10, 2)->nullable();
            $table->smallInteger('transaction_status')->nullable();
            $table->dateTime('transaction_date_created')->nullable();
            $table->dateTime('transaction_date_updated')->nullable();
            $table->integer('transaction_created_by')->nullable();
            $table->integer('transaction_updated_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounts_transaction');
    }
};
