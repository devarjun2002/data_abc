<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('keys_transaction_delet', function (Blueprint $table) {
            $table->id('keys_transaction_id');
            $table->integer('keys_transaction_property')->nullable();
            $table->smallInteger('keys_transaction_quantity')->nullable();
            $table->text('keys_transaction_to_person')->nullable();
            $table->integer('keys_transaction_to')->nullable();
            $table->dateTime('keys_transaction_out')->nullable();
            $table->dateTime('keys_transaction_due_in')->nullable();
            $table->dateTime('keys_transaction_in')->nullable();
            $table->text('keys_transaction_notes')->nullable();
            $table->smallInteger('keys_transaction_status')->nullable();
            $table->dateTime('keys_transaction_date_created')->nullable();
            $table->dateTime('keys_transaction_date_updated')->nullable();
            $table->integer('keys_transaction_created_by')->nullable();
            $table->integer('keys_transaction_updated_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('keys_transaction_delet');
    }
};
