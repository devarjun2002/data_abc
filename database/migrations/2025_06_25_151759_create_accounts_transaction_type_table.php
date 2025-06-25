<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_transaction_type', function (Blueprint $table) {
            $table->id('transaction_type_id');
            $table->text('transaction_type_name')->nullable();
            $table->text('transaction_type_statement_name')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounts_transaction_type');
    }
};
