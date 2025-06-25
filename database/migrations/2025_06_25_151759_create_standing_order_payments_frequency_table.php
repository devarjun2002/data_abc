<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('standing_order_payments_frequency', function (Blueprint $table) {
            $table->id('standing_order_payments_frequency_id');
            $table->string('standing_order_payments_frequency_name', 20)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('standing_order_payments_frequency');
    }
};
