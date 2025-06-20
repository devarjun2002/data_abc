<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_offer_sale_chain_position', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('property_offer_sale_chain_position_id');
            $table->text('property_offer_sale_chain_position_name')->nullable();
            $table->text('property_offer_sale_chain_position_name2')->nullable();
            $table->tinyInteger('property_offer_sale_chain_position_sort')->nullable();
        });
        DB::statement("ALTER TABLE property_offer_sale_chain_position ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_offer_sale_chain_position');
    }
};
