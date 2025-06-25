<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('keys_transaction_status_delet', function (Blueprint $table) {
            $table->id('keys_transaction_status_id');
            $table->string('keys_transaction_status_name', 15)->nullable();
            $table->smallInteger('keys_transaction_status_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('keys_transaction_status_delet');
    }
};
