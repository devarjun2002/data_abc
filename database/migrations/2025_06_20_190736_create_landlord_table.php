<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('landlord', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('landlord_id');
            $table->string('landlord_token', 40)->nullable();
            $table->tinyInteger('landlord_type')->nullable();
            $table->tinyInteger('landlord_title')->nullable();
            $table->string('landlord_first_name', 30)->nullable();
            $table->string('landlord_surname', 30)->nullable();
            $table->text('landlord_trading_name')->nullable();
            $table->text('landlord_company_name')->nullable();
            $table->text('landlord_company_trading_name')->nullable();
            $table->text('landlord_company_contact_name')->nullable();
            $table->string('landlord_company_registration_number', 10)->nullable();
            $table->string('landlord_company_vat_registration_number', 20)->nullable();
            $table->text('landlord_company_reg_office_property_number_name')->nullable();
            $table->text('landlord_company_reg_office_address_line_1')->nullable();
            $table->text('landlord_company_reg_office_address_line_2')->nullable();
            $table->text('landlord_company_reg_office_suburb')->nullable();
            $table->text('landlord_company_reg_office_town_city')->nullable();
            $table->string('landlord_company_reg_office_postcode', 8)->nullable();
            $table->integer('landlord_company_reg_office_country')->nullable();
            $table->text('landlord_phone_home')->nullable();
            $table->text('landlord_phone_work')->nullable();
            $table->text('landlord_phone_mobile')->nullable();
            $table->text('landlord_fax')->nullable();
            $table->text('landlord_email')->nullable();
            $table->text('landlord_email_accounts')->nullable();
            $table->text('landlord_email_works')->nullable();
            $table->text('landlord_property_number_name')->nullable();
            $table->text('landlord_apartment_number_name')->nullable();
            $table->text('landlord_address_line_1')->nullable();
            $table->text('landlord_address_line_2')->nullable();
            $table->text('landlord_suburb')->nullable();
            $table->text('landlord_town_city')->nullable();
            $table->string('landlord_postcode', 8)->nullable();
            $table->integer('landlord_country')->nullable();
            $table->tinyInteger('landlord_bank_name')->nullable();
            $table->string('landlord_bank_sort_code', 8)->nullable();
            $table->string('landlord_bank_account_number', 8)->nullable();
            $table->text('landlord_bank_account_name')->nullable();
            $table->text('landlord_bank_iban')->nullable();
            $table->string('landlord_bank_bic_swift', 11)->nullable();
            $table->integer('landlord_nrl_status')->nullable();
            $table->decimal('landlord_nrl_tax_rate')->nullable();
            $table->string('landlord_nrl_reference', 15)->nullable();
            $table->date('landlord_nrl_date')->nullable();
            $table->integer('landlord_status')->nullable();
            $table->integer('landlord_lead_source')->nullable();
            $table->text('landlord_notes')->nullable();
            $table->tinyInteger('landlord_online_account')->nullable();
            $table->text('landlord_online_login_username')->nullable();
            $table->text('landlord_online_login_password')->nullable();
            $table->string('landlord_online_account_password_reset_token', 40)->nullable();
            $table->tinyInteger('landlord_lha')->nullable();
            $table->tinyInteger('landlord_pets')->nullable();
            $table->tinyInteger('landlord_smoking')->nullable();
            $table->tinyInteger('landlord_sharers')->nullable();
            $table->integer('landlord_contractors_use')->nullable();
            $table->decimal('landlord_tenant_find_fee')->nullable();
            $table->tinyInteger('landlord_tenant_find_fee_type')->nullable();
            $table->decimal('landlord_tenant_find_with_management_fee')->nullable();
            $table->tinyInteger('landlord_tenant_find_with_management_fee_type')->nullable();
            $table->decimal('landlord_management_fee')->nullable();
            $table->tinyInteger('landlord_management_fee_type')->nullable();
            $table->date('landlord_dob')->nullable();
            $table->string('landlord_passport_number', 10)->nullable();
            $table->string('landlord_driving_licence_number', 20)->nullable();
            $table->string('landlord_nino', 13)->nullable();
            $table->integer('landlord_branch')->nullable();
            $table->integer('landlord_solicitor_company')->nullable();
            $table->tinyInteger('landlord_mailing_list')->nullable();
            $table->integer('landlord_solicitor_company_individual')->nullable();
            $table->text('landlord_works_notes')->nullable();
            $table->text('landlord_fees_notes')->nullable();
            $table->tinyInteger('landlord_emails_new_invoice_credit')->nullable();
            $table->tinyInteger('landlord_emails_new_property_inspection')->nullable();
            $table->tinyInteger('landlord_emails_new_invoice')->nullable();
            $table->tinyInteger('landlord_emails_new_landlord_payment')->nullable();
            $table->tinyInteger('landlord_emails_edit_works')->nullable();
            $table->tinyInteger('landlord_emails_tenant_charge_chase')->nullable();
            $table->tinyInteger('landlord_emails_new_application')->nullable();
            $table->tinyInteger('landlord_emails_edit_application')->nullable();
            $table->tinyInteger('landlord_emails_new_viewing')->nullable();
            $table->tinyInteger('landlord_emails_edit_viewing')->nullable();
            $table->tinyInteger('landlord_emails_new_certificate_renewal')->nullable();
            $table->tinyInteger('landlord_emails_certificate_take_on_chase')->nullable();
            $table->tinyInteger('landlord_emails_selective_licence_chase')->nullable();
            $table->tinyInteger('landlord_emails_outstanding_invoice_balance_exceed_income')->nullable();
            $table->tinyInteger('landlord_bacs_file')->nullable();
            $table->tinyInteger('landlord_suspend_payments')->nullable();
            $table->tinyInteger('landlord_capacity')->nullable();
            $table->tinyInteger('landlord_deceased')->nullable();
            $table->tinyInteger('landlord_discount_group')->nullable();
            $table->dateTime('landlord_date_created')->nullable();
            $table->dateTime('landlord_date_updated')->nullable();
            $table->integer('landlord_created_by')->nullable();
            $table->integer('landlord_updated_by')->nullable();
        });
        DB::statement("ALTER TABLE landlord ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('landlord');
    }
};
