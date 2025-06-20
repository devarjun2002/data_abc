<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_tenant_charge_payment', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('tenant_charge_payment_id');
            $table->date('tenant_charge_payment_date')->nullable();
            $table->decimal('tenant_charge_payment_amount')->nullable();
            $table->tinyInteger('tenant_charge_payment_method')->nullable();
            $table->integer('tenant_charge_payment_tenant_charge_id')->nullable();
            $table->text('tenant_charge_payment_notes')->nullable();
            $table->tinyInteger('accounts_tenant_charge_payment_type')->nullable();
            $table->tinyInteger('tenant_charge_housing_benefit')->nullable();
            $table->dateTime('tenant_charge_payment_date_created')->nullable();
            $table->dateTime('tenant_charge_payment_date_updated')->nullable();
            $table->integer('tenant_charge_payment_created_by')->nullable();
            $table->integer('tenant_charge_payment_updated_by')->nullable();
        });
        DB::statement("ALTER TABLE accounts_tenant_charge_payment ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('accounts_tenant_charge_payment');
    }
};
