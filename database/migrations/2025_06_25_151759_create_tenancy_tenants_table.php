<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenancy_tenants', function (Blueprint $table) {
            $table->id('tenancy_tenants_id');
            $table->integer('tenant_id')->nullable();
            $table->integer('tenancy_id')->nullable();
            $table->smallInteger('tenant_lead')->nullable();
            $table->integer('property_id')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenancy_tenants');
    }
};
