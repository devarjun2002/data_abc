<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('application_applicant', function (Blueprint $table) {
            $table->id('application_applicant_id');
            $table->integer('application_id')->nullable();
            $table->smallInteger('application_applicant_type')->nullable();
            $table->smallInteger('application_homeowner')->nullable();
            $table->smallInteger('application_title')->nullable();
            $table->text('application_first_name')->nullable();
            $table->text('application_surname')->nullable();
            $table->text('application_telephone_numbers')->nullable();
            $table->text('application_email_address')->nullable();
            $table->date('application_dob')->nullable();
            $table->smallInteger('application_nationality')->nullable();
            $table->string('application_nino', 13)->nullable();
            $table->text('application_address_line_1')->nullable();
            $table->text('application_address_line_2')->nullable();
            $table->text('application_town_city')->nullable();
            $table->string('application_post_code', 8)->nullable();
            $table->smallInteger('application_employment_status')->nullable();
            $table->text('application_employment_nature')->nullable();
            $table->decimal('application_income', 10, 2)->nullable();
            $table->text('application_company_legal_name')->nullable();
            $table->text('application_company_trading_name')->nullable();
            $table->string('application_company_registration_number', 10)->nullable();
            $table->string('application_company_vat_registration_number', 20)->nullable();
            $table->smallInteger('application_company_title')->nullable();
            $table->text('application_company_first_name')->nullable();
            $table->text('application_company_surname')->nullable();
            $table->text('application_company_telephone_numbers')->nullable();
            $table->text('application_company_email_address')->nullable();
            $table->text('application_company_ro_address_line_1')->nullable();
            $table->text('application_company_ro_address_line_2')->nullable();
            $table->text('application_company_ro_town_city')->nullable();
            $table->string('application_company_ro_post_code', 8)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('application_applicant');
    }
};
