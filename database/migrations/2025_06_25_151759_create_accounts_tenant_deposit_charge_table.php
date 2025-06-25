<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_tenant_deposit_charge', function (Blueprint $table) {
            $table->id('tenant_deposit_charge_id');
            $table->string('tenant_deposit_charge_token', 40)->nullable();
            $table->date('tenant_deposit_charge_date')->nullable();
            $table->smallInteger('tenant_deposit_charge_payment_terms')->nullable();
            $table->date('tenant_deposit_charge_due_date')->nullable();
            $table->decimal('tenant_deposit_charge_amount', 10, 2)->nullable();
            $table->decimal('tenant_deposit_charge_total_amount_paid', 10, 2)->nullable();
            $table->integer('tenant_deposit_charge_tenancy_id')->nullable();
            $table->text('tenant_deposit_charge_notes')->nullable();
            $table->integer('tenant_deposit_charge_branch')->nullable();
            $table->dateTime('tenant_deposit_charge_date_created')->nullable();
            $table->dateTime('tenant_deposit_charge_date_updated')->nullable();
            $table->integer('tenant_deposit_charge_created_by')->nullable();
            $table->integer('tenant_deposit_charge_updated_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounts_tenant_deposit_charge');
    }
};
