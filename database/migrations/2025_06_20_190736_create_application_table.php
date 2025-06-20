<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('application', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('application_id');
            $table->string('application_token', 40)->nullable();
            $table->integer('application_property')->nullable();
            $table->integer('application_property_room')->nullable();
            $table->date('application_move_in_date')->nullable();
            $table->tinyInteger('application_length_of_stay')->nullable();
            $table->smallInteger('application_tenancy_length')->nullable();
            $table->text('application_children')->nullable();
            $table->text('application_pets')->nullable();
            $table->text('application_moving_reason')->nullable();
            $table->text('application_notes')->nullable();
            $table->tinyInteger('application_bank_name')->nullable();
            $table->text('application_bank_account_name')->nullable();
            $table->string('application_bank_sort_code', 8)->nullable();
            $table->string('application_bank_account_number', 8)->nullable();
            $table->tinyInteger('application_status')->nullable();
            $table->text('application_status_reason')->nullable();
            $table->integer('application_employee')->nullable();
            $table->tinyInteger('application_type')->nullable();
            $table->smallInteger('application_company_years_trading')->nullable();
            $table->text('application_company_nature')->nullable();
            $table->text('application_business_address_history')->nullable();
            $table->text('application_accountant_company_name')->nullable();
            $table->tinyInteger('application_accountant_title')->nullable();
            $table->text('application_accountant_first_name')->nullable();
            $table->text('application_accountant_surname')->nullable();
            $table->text('application_accountant_telephone_numbers')->nullable();
            $table->text('application_accountant_email_address')->nullable();
            $table->text('application_accountant_address_line_1')->nullable();
            $table->text('application_accountant_address_line_2')->nullable();
            $table->text('application_accountant_town_city')->nullable();
            $table->string('application_accountant_post_code', 8)->nullable();
            $table->text('application_solicitor_company_name')->nullable();
            $table->tinyInteger('application_solicitor_title')->nullable();
            $table->text('application_solicitor_first_name')->nullable();
            $table->text('application_solicitor_surname')->nullable();
            $table->text('application_solicitor_telephone_numbers')->nullable();
            $table->text('application_solicitor_email_address')->nullable();
            $table->text('application_solicitor_address_line_1')->nullable();
            $table->text('application_solicitor_address_line_2')->nullable();
            $table->text('application_solicitor_town_city')->nullable();
            $table->string('application_solicitor_post_code', 8)->nullable();
            $table->text('application_trade2_company_name')->nullable();
            $table->tinyInteger('application_trade2_title')->nullable();
            $table->text('application_trade2_first_name')->nullable();
            $table->text('application_trade2_surname')->nullable();
            $table->text('application_trade2_telephone_numbers')->nullable();
            $table->text('application_trade2_email_address')->nullable();
            $table->text('application_trade2_address_line_1')->nullable();
            $table->text('application_trade2_address_line_2')->nullable();
            $table->text('application_trade2_town_city')->nullable();
            $table->string('application_trade2_post_code', 8)->nullable();
            $table->text('application_trade_company_name')->nullable();
            $table->tinyInteger('application_trade_title')->nullable();
            $table->text('application_trade_first_name')->nullable();
            $table->text('application_trade_surname')->nullable();
            $table->text('application_trade_telephone_numbers')->nullable();
            $table->text('application_trade_email_address')->nullable();
            $table->text('application_trade_address_line_1')->nullable();
            $table->text('application_trade_address_line_2')->nullable();
            $table->text('application_trade_town_city')->nullable();
            $table->string('application_trade_post_code', 8)->nullable();
            $table->tinyInteger('application_body_type')->nullable();
            $table->integer('application_landlord_solicitor_company')->nullable();
            $table->integer('application_landlord_solicitor_company_individual')->nullable();
            $table->integer('application_tenant_solicitor_company')->nullable();
            $table->integer('application_tenant_solicitor_company_individual')->nullable();
            $table->dateTime('application_date_created')->nullable();
            $table->tinyInteger('application_applicant_email_reminders')->nullable();
            $table->tinyInteger('application_holding_deposit_paid')->nullable();
            $table->tinyInteger('application_proceed')->nullable();
            $table->tinyInteger('application_can_physically_view')->nullable();
        });
        DB::statement("ALTER TABLE application ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('application');
    }
};
