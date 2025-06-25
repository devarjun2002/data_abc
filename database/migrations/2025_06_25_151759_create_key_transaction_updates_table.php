<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('key_transaction_updates', function (Blueprint $table) {
            $table->id('key_transaction_updates_id');
            $table->integer('key_transaction_updates_keys_transaction_id')->nullable();
            $table->text('key_transaction_updates_private_notes')->nullable();
            $table->dateTime('key_transaction_updates_date_created')->nullable();
            $table->integer('key_transaction_updates_created_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('key_transaction_updates');
    }
};
