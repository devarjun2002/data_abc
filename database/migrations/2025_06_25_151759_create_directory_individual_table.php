<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('directory_individual', function (Blueprint $table) {
            $table->id('directory_individual_id');
            $table->integer('directory_individual_company')->nullable();
            $table->smallInteger('directory_individual_title')->nullable();
            $table->string('directory_individual_first_name', 30)->nullable();
            $table->string('directory_individual_surname', 30)->nullable();
            $table->text('directory_individual_phone_home')->nullable();
            $table->text('directory_individual_phone_work')->nullable();
            $table->text('directory_individual_phone_mobile')->nullable();
            $table->string('directory_individual_fax', 20)->nullable();
            $table->text('directory_individual_email')->nullable();
            $table->text('directory_individual_property_number_name')->nullable();
            $table->text('directory_individual_apartment_number_name')->nullable();
            $table->text('directory_individual_address_line_1')->nullable();
            $table->text('directory_individual_address_line_2')->nullable();
            $table->text('directory_individual_suburb')->nullable();
            $table->text('directory_individual_town_city')->nullable();
            $table->string('directory_individual_postcode', 8)->nullable();
            $table->integer('directory_individual_country')->nullable();
            $table->integer('directory_individual_status')->nullable();
            $table->text('directory_individual_notes')->nullable();
            $table->smallInteger('directory_individual_bank_name')->nullable();
            $table->string('directory_individual_bank_sort_code', 8)->nullable();
            $table->string('directory_individual_bank_account_number', 8)->nullable();
            $table->text('directory_individual_bank_account_name')->nullable();
            $table->dateTime('directory_individual_date_created')->nullable();
            $table->dateTime('directory_individual_date_updated')->nullable();
            $table->integer('directory_individual_created_by')->nullable();
            $table->integer('directory_individual_updated_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('directory_individual');
    }
};
