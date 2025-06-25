<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('branch', function (Blueprint $table) {
            $table->id('branch_id');
            $table->integer('branch_company_id')->nullable();
            $table->text('branch_company_name')->nullable();
            $table->string('branch_name', 20)->nullable();
            $table->decimal('branch_sole_sale_fee', 10, 2)->nullable();
            $table->decimal('branch_multi_sale_fee', 10, 2)->nullable();
            $table->smallInteger('branch_sole_sale_fee_type')->nullable();
            $table->smallInteger('branch_multi_sale_fee_type')->nullable();
            $table->decimal('branch_sole_sale_fee_min_no_viewings', 10, 2)->nullable();
            $table->decimal('branch_sole_sale_fee_min_with_viewings', 10, 2)->nullable();
            $table->decimal('branch_multi_sale_fee_min_no_viewings', 10, 2)->nullable();
            $table->decimal('branch_multi_sale_fee_min_with_viewings', 10, 2)->nullable();
            $table->decimal('branch_tenant_find_fee', 10, 2)->nullable();
            $table->decimal('branch_tenant_find_fee_min', 10, 2)->nullable();
            $table->decimal('branch_tenant_find_with_management_fee', 10, 2)->nullable();
            $table->decimal('branch_tenant_find_with_management_fee_min_commercial', 10, 2)->nullable();
            $table->decimal('branch_management_fee', 10, 2)->nullable();
            $table->decimal('branch_management_fee_commercial', 10, 2)->nullable();
            $table->smallInteger('branch_tenant_find_fee_type')->nullable();
            $table->smallInteger('branch_tenant_find_with_management_fee_type')->nullable();
            $table->smallInteger('branch_management_fee_type')->nullable();
            $table->text('branch_tenant_fees')->nullable();
            $table->text('branch_tenant_fees_commercial')->nullable();
            $table->string('branch_sale_phone', 20)->nullable();
            $table->string('branch_letting_phone', 20)->nullable();
            $table->string('branch_sale_fax', 20)->nullable();
            $table->string('branch_letting_fax', 20)->nullable();
            $table->text('branch_sale_email')->nullable();
            $table->text('branch_sale_email_commercial')->nullable();
            $table->text('branch_letting_email')->nullable();
            $table->text('branch_letting_email_commercial')->nullable();
            $table->text('branch_accounts_email')->nullable();
            $table->text('branch_works_email')->nullable();
            $table->text('branch_property_number_name')->nullable();
            $table->text('branch_address_line_1')->nullable();
            $table->text('branch_address_line_2')->nullable();
            $table->text('branch_suburb')->nullable();
            $table->text('branch_town_city')->nullable();
            $table->string('branch_postcode', 8)->nullable();
            $table->integer('branch_country')->nullable();
            $table->decimal('branch_reminder_letter_fee', 10, 2)->nullable();
            $table->decimal('branch_missed_payment_fee', 10, 2)->nullable();
            $table->smallInteger('branch_bank_name_current')->nullable();
            $table->string('branch_bank_sort_code_current', 8)->nullable();
            $table->string('branch_bank_account_number_current', 8)->nullable();
            $table->text('branch_bank_iban_current')->nullable();
            $table->string('branch_bank_bic_swift_current', 11)->nullable();
            $table->text('branch_bank_account_name_current')->nullable();
            $table->smallInteger('branch_bank_name_client')->nullable();
            $table->string('branch_bank_sort_code_client', 8)->nullable();
            $table->string('branch_bank_account_number_client', 8)->nullable();
            $table->text('branch_bank_iban_client')->nullable();
            $table->string('branch_bank_bic_swift_client', 11)->nullable();
            $table->text('branch_bank_account_name_client')->nullable();
            $table->string('branch_bank_bacs_file_originator_name', 18)->nullable();
            $table->text('branch_cheque_payable_to')->nullable();
            $table->float('branch_latitude')->nullable();
            $table->float('branch_longitude')->nullable();
            $table->text('branch_xmas_opening_description')->nullable();
            $table->text('branch_easter_opening_description')->nullable();
            $table->string('branch_zpg_ref', 10)->nullable();
            $table->smallInteger('branch_inspection_frequency')->nullable();
            $table->smallInteger('branch_mileage_payment')->nullable();
            $table->text('branch_accompanied_viewing_schedule')->nullable();
            $table->text('branch_redress_scheme')->nullable();
            $table->text('branch_cmp_provider')->nullable();
            $table->text('branch_cmp_provider_accounting_rules')->nullable();
            $table->string('branch_hmrc_nrl_ref', 20)->nullable();
            $table->text('branch_deposit_protection_service_id')->nullable();
            $table->text('branch_deposit_protection_service_bank_account_name')->nullable();
            $table->string('branch_deposit_protection_service_bank_account_number', 8)->nullable();
            $table->string('branch_deposit_protection_service_bank_sort_code', 8)->nullable();
            $table->text('branch_mydeposits_id')->nullable();
            $table->text('branch_ip_address')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('branch');
    }
};
