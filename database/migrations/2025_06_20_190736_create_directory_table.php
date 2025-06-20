<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('directory', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('directory_id');
            $table->integer('directory_category')->nullable();
            $table->text('directory_company_name')->nullable();
            $table->text('directory_branch_name')->nullable();
            $table->text('directory_contact_name')->nullable();
            $table->text('directory_phone_work')->nullable();
            $table->text('directory_phone_mobile')->nullable();
            $table->string('directory_fax', 20)->nullable();
            $table->text('directory_email')->nullable();
            $table->text('directory_website')->nullable();
            $table->text('directory_dx')->nullable();
            $table->text('directory_property_number_name')->nullable();
            $table->text('directory_apartment_number_name')->nullable();
            $table->text('directory_address_line_1')->nullable();
            $table->text('directory_address_line_2')->nullable();
            $table->text('directory_suburb')->nullable();
            $table->text('directory_town_city')->nullable();
            $table->string('directory_postcode', 8)->nullable();
            $table->integer('directory_country')->nullable();
            $table->tinyInteger('directory_bank_name')->nullable();
            $table->string('directory_bank_sort_code', 8)->nullable();
            $table->string('directory_bank_account_number', 8)->nullable();
            $table->text('directory_bank_account_name')->nullable();
            $table->integer('directory_status')->nullable();
            $table->text('directory_notes')->nullable();
            $table->dateTime('directory_date_created')->nullable();
            $table->dateTime('directory_date_updated')->nullable();
            $table->integer('directory_created_by')->nullable();
            $table->integer('directory_updated_by')->nullable();
            $table->tinyInteger('directory_commission_scheme')->nullable();
            $table->decimal('directory_commission_percentage')->nullable();
            $table->tinyInteger('directory_payment_terms')->nullable();
            $table->integer('directory_landlord_contractor')->nullable();
            $table->smallInteger('directory_nominal_code')->nullable();
            $table->tinyInteger('directory_vat_rate')->nullable();
            $table->tinyInteger('directory_accounts_purposes_only')->nullable();
        });
        DB::statement("ALTER TABLE directory ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('directory');
    }
};
