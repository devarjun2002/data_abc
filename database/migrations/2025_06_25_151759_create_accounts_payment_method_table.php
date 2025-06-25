<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_payment_method', function (Blueprint $table) {
            $table->id('payment_method_id');
            $table->string('payment_method_name', 20)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounts_payment_method');
    }
};
