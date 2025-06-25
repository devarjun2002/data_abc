<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_offer_sale_chain', function (Blueprint $table) {
            $table->id('property_offer_sale_chain_id');
            $table->smallInteger('property_offer_sale_chain_sort')->nullable();
            $table->integer('property_offer_sale_id')->nullable();
            $table->text('property_offer_sale_chain_name')->nullable();
            $table->text('property_offer_sale_chain_property_address')->nullable();
            $table->integer('property_offer_vendor_property_id')->nullable();
            $table->text('property_offer_sale_chain_buyers_name')->nullable();
            $table->integer('property_offer_buyer_property_id')->nullable();
            $table->decimal('property_offer_sale_chain_sale_price', 10, 2)->nullable();
            $table->smallInteger('property_offer_sale_chain_selling')->nullable();
            $table->text('property_offer_sale_chain_estate_agent_details')->nullable();
            $table->smallInteger('property_offer_sale_chain_position')->nullable();
            $table->smallInteger('property_offer_sale_chain_status')->nullable();
            $table->smallInteger('property_offer_sale_chain_mortgage')->nullable();
            $table->smallInteger('property_offer_sale_chain_survey')->nullable();
            $table->smallInteger('property_offer_sale_chain_checked')->nullable();
            $table->text('property_offer_sale_chain_notes')->nullable();
            $table->dateTime('property_offer_sale_chain_date_created')->nullable();
            $table->dateTime('property_offer_sale_chain_date_updated')->nullable();
            $table->integer('property_offer_sale_chain_created_by')->nullable();
            $table->integer('property_offer_sale_chain_updated_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_offer_sale_chain');
    }
};
