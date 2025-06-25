<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_bacs_file', function (Blueprint $table) {
            $table->id('bacs_file_id');
            $table->string('bacs_file_destination_sort_code', 6)->nullable();
            $table->string('bacs_file_destination_account_number', 8)->nullable();
            $table->string('bacs_file_destination_account_type', 1)->nullable();
            $table->string('bacs_file_bacs_code', 2)->nullable();
            $table->string('bacs_file_debit_sort_code', 6)->nullable();
            $table->string('bacs_file_debit_account_number', 8)->nullable();
            $table->string('bacs_file_free_format_text', 4)->nullable();
            $table->string('bacs_file_amount_pence', 11)->nullable();
            $table->decimal('bacs_file_amount', 10, 2)->nullable();
            $table->string('bacs_file_originator_name', 18)->nullable();
            $table->string('bacs_file_reference', 18)->nullable();
            $table->integer('bacs_file_invoice_payment_reference')->nullable();
            $table->integer('bacs_file_landlord_payment_reference')->nullable();
            $table->string('bacs_file_destination_account_name', 18)->nullable();
            $table->string('bacs_file_processing_date', 6)->nullable();
            $table->integer('bacs_file_directory_id')->nullable();
            $table->date('bacs_file_payment_date')->nullable();
            $table->smallInteger('bacs_file_disbursement_DEL')->nullable();
            $table->smallInteger('bacs_file_nominal_code')->nullable();
            $table->smallInteger('bacs_file_vat_rate')->nullable();
            $table->decimal('bacs_file_vat_amount', 10, 2)->nullable();
            $table->smallInteger('bacs_file_exported')->nullable();
            $table->dateTime('bacs_file_date_created')->nullable();
            $table->integer('bacs_file_created_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounts_bacs_file');
    }
};
