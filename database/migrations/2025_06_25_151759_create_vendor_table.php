<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('vendor', function (Blueprint $table) {
            $table->id('vendor_id');
            $table->string('vendor_token', 40)->nullable();
            $table->smallInteger('vendor_type')->nullable();
            $table->smallInteger('vendor_title')->nullable();
            $table->string('vendor_first_name', 30)->nullable();
            $table->string('vendor_surname', 30)->nullable();
            $table->text('vendor_trading_name')->nullable();
            $table->text('vendor_company_name')->nullable();
            $table->text('vendor_company_trading_name')->nullable();
            $table->text('vendor_company_contact_name')->nullable();
            $table->string('vendor_company_registration_number', 10)->nullable();
            $table->string('vendor_company_vat_registration_number', 20)->nullable();
            $table->text('vendor_company_reg_office_property_number_name')->nullable();
            $table->text('vendor_company_reg_office_address_line_1')->nullable();
            $table->text('vendor_company_reg_office_address_line_2')->nullable();
            $table->text('vendor_company_reg_office_suburb')->nullable();
            $table->text('vendor_company_reg_office_town_city')->nullable();
            $table->string('vendor_company_reg_office_postcode', 8)->nullable();
            $table->integer('vendor_company_reg_office_country')->nullable();
            $table->text('vendor_phone_home')->nullable();
            $table->text('vendor_phone_work')->nullable();
            $table->text('vendor_phone_mobile')->nullable();
            $table->text('vendor_fax')->nullable();
            $table->text('vendor_email')->nullable();
            $table->text('vendor_property_number_name')->nullable();
            $table->text('vendor_apartment_number_name')->nullable();
            $table->text('vendor_address_line_1')->nullable();
            $table->text('vendor_address_line_2')->nullable();
            $table->text('vendor_suburb')->nullable();
            $table->text('vendor_town_city')->nullable();
            $table->string('vendor_postcode', 8)->nullable();
            $table->integer('vendor_country')->nullable();
            $table->smallInteger('vendor_bank_name')->nullable();
            $table->string('vendor_bank_sort_code', 8)->nullable();
            $table->string('vendor_bank_account_number', 8)->nullable();
            $table->text('vendor_bank_account_name')->nullable();
            $table->integer('vendor_status')->nullable();
            $table->integer('vendor_lead_source')->nullable();
            $table->text('vendor_notes')->nullable();
            $table->smallInteger('vendor_online_account')->nullable();
            $table->text('vendor_online_login_username')->nullable();
            $table->text('vendor_online_login_password')->nullable();
            $table->string('vendor_online_account_password_reset_token', 40)->nullable();
            $table->date('vendor_dob')->nullable();
            $table->string('vendor_passport_number', 10)->nullable();
            $table->string('vendor_driving_licence_number', 20)->nullable();
            $table->string('vendor_nino', 10)->nullable();
            $table->decimal('vendor_sole_sale_fee', 10, 2)->nullable();
            $table->smallInteger('vendor_sole_sale_fee_type')->nullable();
            $table->decimal('vendor_multi_sale_fee', 10, 2)->nullable();
            $table->smallInteger('vendor_multi_sale_fee_type')->nullable();
            $table->dateTime('vendor_date_created')->nullable();
            $table->dateTime('vendor_date_updated')->nullable();
            $table->integer('vendor_created_by')->nullable();
            $table->integer('vendor_updated_by')->nullable();
            $table->integer('vendor_solicitor_company')->nullable();
            $table->integer('vendor_solicitor_company_individual')->nullable();
            $table->integer('vendor_branch')->nullable();
            $table->smallInteger('vendor_mailing_list')->nullable();
            $table->text('vendor_fees_notes')->nullable();
            $table->smallInteger('vendor_capacity')->nullable();
            $table->smallInteger('vendor_deceased')->nullable();
            $table->smallInteger('vendor_emails_new_viewing')->nullable();
            $table->smallInteger('vendor_emails_edit_viewing')->nullable();
            $table->smallInteger('vendor_emails_feedback')->nullable();
            $table->smallInteger('vendor_emails_property_performance_review')->nullable();
            $table->smallInteger('vendor_emails_new_offer')->nullable();
            $table->smallInteger('vendor_emails_edit_offer')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vendor');
    }
};
