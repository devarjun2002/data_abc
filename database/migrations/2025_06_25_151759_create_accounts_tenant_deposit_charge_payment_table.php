<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_tenant_deposit_charge_payment', function (Blueprint $table) {
            $table->id('tenant_deposit_charge_payment_id');
            $table->date('tenant_deposit_charge_payment_date')->nullable();
            $table->decimal('tenant_deposit_charge_payment_amount', 10, 2)->nullable();
            $table->smallInteger('tenant_deposit_charge_payment_method')->nullable();
            $table->integer('tenant_deposit_charge_payment_tenant_deposit_charge_id')->nullable();
            $table->text('tenant_deposit_charge_payment_notes')->nullable();
            $table->dateTime('tenant_deposit_charge_payment_date_created')->nullable();
            $table->dateTime('tenant_deposit_charge_payment_date_updated')->nullable();
            $table->integer('tenant_deposit_charge_payment_created_by')->nullable();
            $table->integer('tenant_deposit_charge_payment_updated_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounts_tenant_deposit_charge_payment');
    }
};
