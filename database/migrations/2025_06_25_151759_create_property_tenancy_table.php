<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_tenancy', function (Blueprint $table) {
            $table->id('property_tenancy_id');
            $table->integer('property_id')->nullable();
            $table->text('property_tenancy_description')->nullable();
            $table->text('property_tenancy_tenant')->nullable();
            $table->smallInteger('property_tenancy_bedrooms')->nullable();
            $table->decimal('property_tenancy_size', 10, 2)->nullable();
            $table->smallInteger('property_tenancy_size_unit')->nullable();
            $table->decimal('property_tenancy_rent', 10, 2)->nullable();
            $table->smallInteger('property_tenancy_rent_frequency')->nullable();
            $table->decimal('property_tenancy_erv', 10, 2)->nullable();
            $table->smallInteger('property_tenancy_erv_frequency')->nullable();
            $table->smallInteger('property_tenancy_lease_type')->nullable();
            $table->date('property_tenancy_lease_start_date')->nullable();
            $table->date('property_tenancy_lease_expiry_date')->nullable();
            $table->text('property_tenancy_public_notes')->nullable();
            $table->smallInteger('property_tenancy_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_tenancy');
    }
};
