<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenancy_rent_agreement', function (Blueprint $table) {
            $table->id('tenancy_rent_agreement_id');
            $table->string('tenancy_rent_agreement_name', 10)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenancy_rent_agreement');
    }
};
