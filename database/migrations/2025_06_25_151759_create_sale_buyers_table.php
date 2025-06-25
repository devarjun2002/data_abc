<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sale_buyers', function (Blueprint $table) {
            $table->id('sale_buyers_id');
            $table->integer('buyer_id')->nullable();
            $table->integer('sale_id')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sale_buyers');
    }
};
