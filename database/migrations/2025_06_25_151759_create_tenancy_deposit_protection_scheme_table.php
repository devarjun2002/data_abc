<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenancy_deposit_protection_scheme', function (Blueprint $table) {
            $table->id('tenancy_deposit_protection_scheme_id');
            $table->string('tenancy_deposit_protection_scheme_name', 30)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenancy_deposit_protection_scheme');
    }
};
