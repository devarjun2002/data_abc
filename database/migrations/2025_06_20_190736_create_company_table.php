<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('company_id');
            $table->string('company_token', 40)->nullable();
            $table->text('company_legal_name')->nullable();
            $table->text('company_trading_name')->nullable();
            $table->string('company_registration_number', 10)->nullable();
            $table->tinyInteger('company_default_vat_rate')->nullable();
            $table->string('company_vat_registration_number', 20)->nullable();
            $table->text('company_reg_office_property_number_name')->nullable();
            $table->text('company_reg_office_address_line_1')->nullable();
            $table->text('company_reg_office_address_line_2')->nullable();
            $table->text('company_reg_office_suburb')->nullable();
            $table->text('company_reg_office_town_city')->nullable();
            $table->string('company_reg_office_postcode', 8)->nullable();
            $table->integer('company_reg_office_country')->nullable();
            $table->text('company_property_number_name')->nullable();
            $table->text('company_address_line_1')->nullable();
            $table->text('company_address_line_2')->nullable();
            $table->text('company_suburb')->nullable();
            $table->text('company_town_city')->nullable();
            $table->string('company_postcode', 8)->nullable();
            $table->integer('company_country')->nullable();
            $table->string('company_phone_number', 20)->nullable();
            $table->string('company_fax_number', 20)->nullable();
            $table->text('company_email')->nullable();
            $table->text('company_website')->nullable();
            $table->text('company_website_display')->nullable();
            $table->date('company_lock_date')->nullable();
        });
        DB::statement("ALTER TABLE company ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('company');
    }
};
