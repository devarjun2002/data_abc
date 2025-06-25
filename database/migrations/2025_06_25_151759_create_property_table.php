<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->id('property_id');
            $table->string('property_token', 40)->nullable();
            $table->smallInteger('property_availability')->nullable();
            $table->smallInteger('property_letting_service')->nullable();
            $table->date('property_letting_available_from')->nullable();
            $table->smallInteger('property_letting_furnished_status')->nullable();
            $table->smallInteger('property_letting_pets')->nullable();
            $table->smallInteger('property_letting_smoking')->nullable();
            $table->smallInteger('property_category')->nullable();
            $table->integer('property_type')->nullable();
            $table->text('property_address_line_1')->nullable();
            $table->string('property_postcode', 8)->nullable();
            $table->integer('property_country')->nullable();
            $table->integer('property_status')->nullable();
            $table->integer('property_created_by')->nullable();
            $table->integer('property_updated_by')->nullable();
            $table->integer('property_branch')->nullable();
            $table->decimal('property_price', 10, 2)->nullable();
            $table->integer('property_contract_type')->nullable();
            $table->decimal('property_latitude', 10, 2)->nullable();
            $table->decimal('property_longitude', 10, 2)->nullable();
            $table->text('property_summary')->nullable();
            $table->text('property_description')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property');
    }
};
