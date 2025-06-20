<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('applicant', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('applicant_id');
            $table->string('applicant_token', 40)->nullable();
            $table->tinyInteger('applicant_type')->nullable();
            $table->integer('applicant_sub_type')->nullable();
            $table->tinyInteger('applicant_title')->nullable();
            $table->text('applicant_first_name')->nullable();
            $table->text('applicant_surname')->nullable();
            $table->text('applicant_company_name')->nullable();
            $table->text('applicant_company_trading_name')->nullable();
            $table->text('applicant_email')->nullable();
            $table->text('applicant_phone_home')->nullable();
            $table->text('applicant_phone_work')->nullable();
            $table->text('applicant_phone_mobile')->nullable();
            $table->text('applicant_fax')->nullable();
            $table->text('applicant_property_number_name')->nullable();
            $table->text('applicant_apartment_number_name')->nullable();
            $table->text('applicant_address_line_1')->nullable();
            $table->text('applicant_address_line_2')->nullable();
            $table->text('applicant_suburb')->nullable();
            $table->text('applicant_town_city')->nullable();
            $table->string('applicant_postcode', 8)->nullable();
            $table->integer('applicant_country')->nullable();
            $table->integer('applicant_branch')->nullable();
            $table->tinyInteger('applicant_purchase_finance')->nullable();
            $table->tinyInteger('applicant_purchase_type')->nullable();
            $table->tinyInteger('applicant_purchase_chain')->nullable();
            $table->tinyInteger('applicant_purchase_chain_status')->nullable();
            $table->text('applicant_purchase_chain_notes')->nullable();
            $table->tinyInteger('applicant_ftb')->nullable();
            $table->tinyInteger('applicant_referral_solicitor')->nullable();
            $table->text('applicant_referral_solicitor_notes')->nullable();
            $table->tinyInteger('applicant_referral_mortgage')->nullable();
            $table->text('applicant_referral_mortgage_notes')->nullable();
            $table->integer('applicant_referral_valuation')->nullable();
            $table->text('applicant_referral_valuation_notes')->nullable();
            $table->decimal('applicant_cash_available')->nullable();
            $table->decimal('applicant_mortgage_available')->nullable();
            $table->date('applicant_pof_date_updated')->nullable();
            $table->tinyInteger('applicant_source')->nullable();
            $table->tinyInteger('applicant_lead_source')->nullable();
            $table->text('applicant_lead_source_notes')->nullable();
            $table->tinyInteger('applicant_referral_valuation_closed')->nullable();
            $table->date('applicant_referral_valuation_next_review_date')->nullable();
            $table->text('applicant_referral_valuation_next_review_notes')->nullable();
            $table->tinyInteger('applicant_referral_mortgage_closed')->nullable();
            $table->date('applicant_referral_mortgage_next_review_date')->nullable();
            $table->text('applicant_referral_mortgage_next_review_notes')->nullable();
            $table->string('applicant_rightmove_email_id', 15)->nullable();
            $table->integer('applicant_negotiator')->nullable();
            $table->dateTime('applicant_date_created')->nullable();
            $table->dateTime('applicant_date_updated')->nullable();
            $table->integer('applicant_created_by')->nullable();
            $table->integer('applicant_updated_by')->nullable();
        });
        DB::statement("ALTER TABLE applicant ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('applicant');
    }
};
