<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_tenant_charge', function (Blueprint $table) {
            $table->id('tenant_charge_id');
            $table->string('tenant_charge_token', 40)->nullable();
            $table->date('tenant_charge_date')->nullable();
            $table->smallInteger('tenant_charge_payment_terms')->nullable();
            $table->date('tenant_charge_due_date')->nullable();
            $table->integer('tenant_charge_tenancy_id')->nullable();
            $table->text('tenant_charge_notes')->nullable();
            $table->decimal('tenant_charge_total_amount_exc_vat', 10, 2)->nullable();
            $table->decimal('tenant_charge_total_vat_amount', 10, 2)->nullable();
            $table->decimal('tenant_charge_total_amount_paid', 10, 2)->nullable();
            $table->integer('tenant_charge_branch')->nullable();
            $table->dateTime('tenant_charge_date_created')->nullable();
            $table->dateTime('tenant_charge_date_updated')->nullable();
            $table->integer('tenant_charge_created_by')->nullable();
            $table->integer('tenant_charge_updated_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounts_tenant_charge');
    }
};
