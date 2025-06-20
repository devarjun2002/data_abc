<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenant', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('tenant_id');
            $table->string('tenant_token', 40)->nullable();
            $table->tinyInteger('tenant_type')->nullable();
            $table->tinyInteger('tenant_title')->nullable();
            $table->string('tenant_first_name', 30)->nullable();
            $table->string('tenant_surname', 30)->nullable();
            $table->text('tenant_company_name')->nullable();
            $table->text('tenant_company_trading_name')->nullable();
            $table->text('tenant_company_contact_name')->nullable();
            $table->string('tenant_company_registration_number', 10)->nullable();
            $table->string('tenant_company_vat_registration_number', 20)->nullable();
            $table->text('tenant_phone_home')->nullable();
            $table->text('tenant_phone_work')->nullable();
            $table->text('tenant_phone_mobile')->nullable();
            $table->string('tenant_fax', 20)->nullable();
            $table->text('tenant_email')->nullable();
            $table->text('tenant_email_accounts')->nullable();
            $table->text('tenant_email_works')->nullable();
            $table->text('tenant_property_number_name')->nullable();
            $table->text('tenant_apartment_number_name')->nullable();
            $table->text('tenant_address_line_1')->nullable();
            $table->text('tenant_address_line_2')->nullable();
            $table->text('tenant_suburb')->nullable();
            $table->text('tenant_town_city')->nullable();
            $table->string('tenant_postcode', 8)->nullable();
            $table->integer('tenant_country')->nullable();
            $table->text('tenant_forwarding_property_number_name')->nullable();
            $table->text('tenant_forwarding_apartment_number_name')->nullable();
            $table->text('tenant_forwarding_address_line_1')->nullable();
            $table->text('tenant_forwarding_address_line_2')->nullable();
            $table->text('tenant_forwarding_suburb')->nullable();
            $table->text('tenant_forwarding_town_city')->nullable();
            $table->string('tenant_forwarding_postcode', 8)->nullable();
            $table->integer('tenant_forwarding_country')->nullable();
            $table->date('tenant_dob')->nullable();
            $table->string('tenant_passport_number', 10)->nullable();
            $table->text('tenant_notes')->nullable();
            $table->tinyInteger('tenant_bank_name')->nullable();
            $table->string('tenant_bank_sort_code', 8)->nullable();
            $table->string('tenant_bank_account_number', 8)->nullable();
            $table->text('tenant_bank_account_name')->nullable();
            $table->dateTime('tenant_date_created')->nullable();
            $table->dateTime('tenant_date_updated')->nullable();
            $table->integer('tenant_created_by')->nullable();
            $table->integer('tenant_updated_by')->nullable();
            $table->tinyInteger('tenant_online_account')->nullable();
            $table->text('tenant_online_login_username')->nullable();
            $table->text('tenant_online_login_password')->nullable();
            $table->string('tenant_online_account_password_reset_token', 40)->nullable();
            $table->string('tenant_nino', 13)->nullable();
            $table->tinyInteger('tenant_employment_status')->nullable();
            $table->text('tenant_employer_name')->nullable();
            $table->decimal('tenant_income')->nullable();
            $table->tinyInteger('tenant_income_frequency')->nullable();
            $table->string('tenant_driving_licence_number', 20)->nullable();
            $table->text('tenant_employment_income_notes')->nullable();
            $table->integer('tenant_referencing_provider')->nullable();
            $table->string('tenant_referencing_provider_reference', 20)->nullable();
            $table->integer('tenant_branch')->nullable();
            $table->date('tenant_right_to_rent_review_date')->nullable();
        });
        DB::statement("ALTER TABLE tenant ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('tenant');
    }
};
