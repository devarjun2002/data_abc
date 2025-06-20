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
            $table->engine = 'InnoDB';
            $table->increments('standing_order_payments_frequency_id');
            $table->string('standing_order_payments_frequency_name', 20)->nullable();
        });
        DB::statement("ALTER TABLE standing_order_payments_frequency ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('standing_order_payments_frequency');
    }
};
