<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('referral_payment_type', function (Blueprint $table) {
            $table->id('referral_payment_type_id');
            $table->text('referral_payment_type_name')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('referral_payment_type');
    }
};
