<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_tenant_charge_payment_type', function (Blueprint $table) {
            $table->id('accounts_tenant_charge_payment_type_id');
            $table->string('accounts_tenant_charge_payment_type_name', 15)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounts_tenant_charge_payment_type');
    }
};
