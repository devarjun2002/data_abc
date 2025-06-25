<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('guarantor', function (Blueprint $table) {
            $table->id('guarantor_id');
            $table->smallInteger('guarantor_title')->nullable();
            $table->string('guarantor_first_name', 30)->nullable();
            $table->string('guarantor_surname', 30)->nullable();
            $table->text('guarantor_phone_home')->nullable();
            $table->text('guarantor_phone_work')->nullable();
            $table->text('guarantor_phone_mobile')->nullable();
            $table->string('guarantor_fax', 20)->nullable();
            $table->text('guarantor_email')->nullable();
            $table->text('guarantor_property_number_name')->nullable();
            $table->text('guarantor_apartment_number_name')->nullable();
            $table->text('guarantor_address_line_1')->nullable();
            $table->text('guarantor_address_line_2')->nullable();
            $table->text('guarantor_suburb')->nullable();
            $table->text('guarantor_town_city')->nullable();
            $table->string('guarantor_postcode', 8)->nullable();
            $table->integer('guarantor_country')->nullable();
            $table->date('guarantor_dob')->nullable();
            $table->string('guarantor_passport_number', 10)->nullable();
            $table->text('guarantor_notes')->nullable();
            $table->smallInteger('guarantor_bank_name')->nullable();
            $table->string('guarantor_bank_sort_code', 8)->nullable();
            $table->string('guarantor_bank_account_number', 8)->nullable();
            $table->text('guarantor_bank_account_name')->nullable();
            $table->dateTime('guarantor_date_created')->nullable();
            $table->dateTime('guarantor_date_updated')->nullable();
            $table->integer('guarantor_created_by')->nullable();
            $table->integer('guarantor_updated_by')->nullable();
            $table->text('guarantor_online_login_username')->nullable();
            $table->text('guarantor_online_login_password')->nullable();
            $table->string('guarantor_nino', 13)->nullable();
            $table->smallInteger('guarantor_employment_status')->nullable();
            $table->text('guarantor_employer_name')->nullable();
            $table->string('guarantor_driving_licence_number', 20)->nullable();
            $table->decimal('guarantor_income', 10, 2)->nullable();
            $table->smallInteger('guarantor_income_frequency')->nullable();
            $table->text('guarantor_income_notes')->nullable();
            $table->smallInteger('guarantor_online_account')->nullable();
            $table->integer('guarantor_referencing_provider')->nullable();
            $table->string('guarantor_referencing_provider_reference', 20)->nullable();
            $table->integer('guarantor_branch')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('guarantor');
    }
};
