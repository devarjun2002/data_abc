<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('application_guarantor', function (Blueprint $table) {
            $table->id('application_guarantor_id');
            $table->integer('application_id')->nullable();
            $table->smallInteger('application_guarantor_title')->nullable();
            $table->string('application_guarantor_first_name', 30)->nullable();
            $table->text('application_guarantor_surname')->nullable();
            $table->text('application_guarantor_telephone_numbers')->nullable();
            $table->text('application_guarantor_email_address')->nullable();
            $table->text('application_guarantor_address_line_1')->nullable();
            $table->text('application_guarantor_address_line_2')->nullable();
            $table->text('application_guarantor_town_city')->nullable();
            $table->string('application_guarantor_post_code', 8)->nullable();
            $table->smallInteger('application_guarantor_homeowner')->nullable();
            $table->date('application_guarantor_dob')->nullable();
            $table->string('application_guarantor_nino', 13)->nullable();
            $table->smallInteger('application_guarantor_employment_status')->nullable();
            $table->text('application_guarantor_employment_nature')->nullable();
            $table->decimal('application_guarantor_income', 10, 2)->nullable();
            $table->smallInteger('application_guarantor_nationality')->nullable();
            $table->text('application_guarantor_applicant_name')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('application_guarantor');
    }
};
