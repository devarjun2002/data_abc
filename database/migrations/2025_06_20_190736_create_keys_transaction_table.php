<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('keys_transaction', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('keys_transaction_id');
            $table->integer('keys_transaction_set_id')->nullable();
            $table->integer('keys_transaction_property')->nullable();
            $table->integer('keys_transaction_client_type')->nullable();
            $table->integer('keys_transaction_client')->nullable();
            $table->tinyInteger('keys_transaction_quantity')->nullable();
            $table->dateTime('keys_transaction_out')->nullable();
            $table->integer('keys_transaction_employee')->nullable();
            $table->text('keys_transaction_notes')->nullable();
            $table->text('keys_transaction_notes_private')->nullable();
            $table->dateTime('keys_transaction_in')->nullable();
            $table->integer('keys_transaction_in_employee')->nullable();
            $table->tinyInteger('keys_transaction_email_reminders')->nullable();
            $table->tinyInteger('keys_transaction_due_back')->nullable();
            $table->dateTime('keys_transaction_date_created')->nullable();
            $table->dateTime('keys_transaction_date_updated')->nullable();
            $table->integer('keys_transaction_created_by')->nullable();
            $table->integer('keys_transaction_updated_by')->nullable();
        });
        DB::statement("ALTER TABLE keys_transaction ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('keys_transaction');
    }
};
