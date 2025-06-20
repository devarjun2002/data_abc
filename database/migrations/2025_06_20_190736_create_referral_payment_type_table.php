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
            $table->engine = 'InnoDB';
            $table->increments('referral_payment_type_id');
            $table->text('referral_payment_type_name')->nullable();
        });
        DB::statement("ALTER TABLE referral_payment_type ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('referral_payment_type');
    }
};
