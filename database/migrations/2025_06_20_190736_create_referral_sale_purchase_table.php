<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('referral_sale_purchase', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('referral_sale_purchase_id');
            $table->string('referral_sale_purchase_name', 30)->nullable();
            $table->tinyInteger('referral_sale_purchase_sort')->nullable();
        });
        DB::statement("ALTER TABLE referral_sale_purchase ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('referral_sale_purchase');
    }
};
