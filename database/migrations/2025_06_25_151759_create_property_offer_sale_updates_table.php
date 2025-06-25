<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_offer_sale_updates', function (Blueprint $table) {
            $table->id('property_offer_sale_updates_id');
            $table->integer('property_offer_sale_updates_property_offer_sale_id')->nullable();
            $table->text('property_offer_sale_updates_public_notes')->nullable();
            $table->text('property_offer_sale_updates_private_notes')->nullable();
            $table->smallInteger('property_offer_sale_updates_notify_vendors')->nullable();
            $table->smallInteger('property_offer_sale_updates_notify_applicants')->nullable();
            $table->smallInteger('property_offer_sale_updates_notify_sales_negotiation')->nullable();
            $table->smallInteger('property_offer_sale_updates_notify_sales_progression')->nullable();
            $table->dateTime('property_offer_sale_updates_date_created')->nullable();
            $table->integer('property_offer_sale_updates_created_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_offer_sale_updates');
    }
};
