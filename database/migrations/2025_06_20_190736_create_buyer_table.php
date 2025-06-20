<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('buyer', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('buyer_id');
            $table->string('buyer_token', 40)->nullable();
            $table->tinyInteger('buyer_type')->nullable();
            $table->tinyInteger('buyer_title')->nullable();
            $table->string('buyer_first_name', 30)->nullable();
            $table->string('buyer_surname', 30)->nullable();
            $table->text('buyer_trading_name')->nullable();
            $table->text('buyer_company_name')->nullable();
            $table->text('buyer_company_trading_name')->nullable();
            $table->text('buyer_company_contact_name')->nullable();
            $table->string('buyer_company_registration_number', 10)->nullable();
            $table->string('buyer_company_vat_registration_number', 20)->nullable();
            $table->text('buyer_company_reg_office_property_number_name')->nullable();
            $table->text('buyer_company_reg_office_address_line_1')->nullable();
            $table->text('buyer_company_reg_office_address_line_2')->nullable();
            $table->text('buyer_company_reg_office_suburb')->nullable();
            $table->text('buyer_company_reg_office_town_city')->nullable();
            $table->string('buyer_company_reg_office_postcode', 8)->nullable();
            $table->integer('buyer_company_reg_office_country')->nullable();
            $table->text('buyer_phone_home')->nullable();
            $table->text('buyer_phone_work')->nullable();
            $table->text('buyer_phone_mobile')->nullable();
            $table->string('buyer_fax', 20)->nullable();
            $table->text('buyer_email')->nullable();
            $table->text('buyer_property_number_name')->nullable();
            $table->text('buyer_apartment_number_name')->nullable();
            $table->text('buyer_address_line_1')->nullable();
            $table->text('buyer_address_line_2')->nullable();
            $table->text('buyer_suburb')->nullable();
            $table->text('buyer_town_city')->nullable();
            $table->string('buyer_postcode', 8)->nullable();
            $table->integer('buyer_country')->nullable();
            $table->text('buyer_notes')->nullable();
            $table->tinyInteger('buyer_bank_name')->nullable();
            $table->string('buyer_bank_sort_code', 8)->nullable();
            $table->string('buyer_bank_account_number', 8)->nullable();
            $table->text('buyer_bank_account_name')->nullable();
            $table->tinyInteger('buyer_online_account')->nullable();
            $table->text('buyer_online_login_username')->nullable();
            $table->text('buyer_online_login_password')->nullable();
            $table->string('buyer_online_account_password_reset_token', 40)->nullable();
            $table->date('buyer_dob')->nullable();
            $table->string('buyer_passport_number', 10)->nullable();
            $table->string('buyer_driving_licence_number', 20)->nullable();
            $table->string('buyer_nino', 10)->nullable();
            $table->dateTime('buyer_date_created')->nullable();
            $table->dateTime('buyer_date_updated')->nullable();
            $table->integer('buyer_created_by')->nullable();
            $table->integer('buyer_updated_by')->nullable();
            $table->integer('buyer_solicitor_company')->nullable();
            $table->integer('buyer_solicitor_company_individual')->nullable();
            $table->integer('buyer_estate_agent_company')->nullable();
            $table->integer('buyer_estate_agent_company_individual')->nullable();
            $table->integer('buyer_branch')->nullable();
            $table->tinyInteger('buyer_source')->nullable();
        });
        DB::statement("ALTER TABLE buyer ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('buyer');
    }
};
