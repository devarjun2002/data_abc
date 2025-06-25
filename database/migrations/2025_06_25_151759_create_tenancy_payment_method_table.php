<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenancy_payment_method', function (Blueprint $table) {
            $table->id('tenancy_payment_method_id');
            $table->string('tenancy_payment_method_name', 30)->nullable();
            $table->string('tenancy_payment_method_description', 20)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenancy_payment_method');
    }
};
