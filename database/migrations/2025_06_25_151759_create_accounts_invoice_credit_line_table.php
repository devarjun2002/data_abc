<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_invoice_credit_line', function (Blueprint $table) {
            $table->id('invoice_credit_line_id');
            $table->integer('invoice_credit_id')->nullable();
            $table->text('invoice_credit_line_description')->nullable();
            $table->decimal('invoice_credit_line_amount', 10, 2)->nullable();
            $table->smallInteger('invoice_credit_line_vat_rate')->nullable();
            $table->decimal('invoice_credit_line_vat_amount', 10, 2)->nullable();
            $table->smallInteger('invoice_credit_line_nominal_code')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounts_invoice_credit_line');
    }
};
