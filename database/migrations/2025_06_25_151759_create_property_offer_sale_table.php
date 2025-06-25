<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_offer_sale', function (Blueprint $table) {
            $table->id('property_offer_sale_id');
            $table->integer('property_offer_sale_property')->nullable();
            $table->decimal('property_offer_sale_price', 10, 2)->nullable();
            $table->smallInteger('property_offer_sale_finance')->nullable();
            $table->smallInteger('property_offer_sale_mortgage_deposit')->nullable();
            $table->smallInteger('property_offer_sale_type')->nullable();
            $table->smallInteger('property_offer_sale_survey')->nullable();
            $table->smallInteger('property_offer_sale_htb')->nullable();
            $table->smallInteger('property_offer_sale_htb_approved')->nullable();
            $table->smallInteger('property_offer_sale_chain')->nullable();
            $table->integer('property_offer_sale_status')->nullable();
            $table->text('property_offer_sale_status_reason')->nullable();
            $table->text('property_offer_sale_notes')->nullable();
            $table->text('property_offer_sale_notes_private')->nullable();
            $table->integer('property_offer_sale_employee')->nullable();
            $table->smallInteger('property_offer_sale_referral_solicitor')->nullable();
            $table->text('property_offer_sale_referral_solicitor_notes')->nullable();
            $table->smallInteger('property_offer_sale_referral_surveyor')->nullable();
            $table->text('property_offer_sale_referral_surveyor_notes')->nullable();
            $table->smallInteger('property_offer_sale_referral_mortgage')->nullable();
            $table->text('property_offer_sale_referral_mortgage_notes')->nullable();
            $table->smallInteger('property_offer_sale_referral_valuation')->nullable();
            $table->text('property_offer_sale_referral_valuation_notes')->nullable();
            $table->smallInteger('property_offer_sale_viewings')->nullable();
            $table->integer('property_offer_sale_revised_offer_id')->nullable();
            $table->dateTime('property_offer_sale_date_created')->nullable();
            $table->dateTime('property_offer_sale_date_updated')->nullable();
            $table->integer('property_offer_sale_created_by')->nullable();
            $table->integer('property_offer_sale_updated_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_offer_sale');
    }
};
