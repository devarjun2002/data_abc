<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('applicant_requirement', function (Blueprint $table) {
            $table->id('ar_id');
            $table->string('ar_token', 40)->nullable();
            $table->smallInteger('ar_active')->nullable();
            $table->integer('ar_applicant_id')->nullable();
            $table->smallInteger('ar_property_category')->nullable();
            $table->smallInteger('ar_property_availability')->nullable();
            $table->integer('ar_property_type')->nullable();
            $table->integer('ar_property_min_price')->nullable();
            $table->integer('ar_property_max_price')->nullable();
            $table->smallInteger('ar_property_min_bedrooms')->nullable();
            $table->smallInteger('ar_property_max_bedrooms')->nullable();
            $table->smallInteger('ar_property_furnished')->nullable();
            $table->smallInteger('ar_property_shared')->nullable();
            $table->smallInteger('ar_property_student')->nullable();
            $table->text('ar_position')->nullable();
            $table->text('ar_notes')->nullable();
            $table->integer('ar_branch')->nullable();
            $table->dateTime('ar_date_created')->nullable();
            $table->dateTime('ar_date_updated')->nullable();
            $table->integer('ar_created_by')->nullable();
            $table->integer('ar_updated_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('applicant_requirement');
    }
};
