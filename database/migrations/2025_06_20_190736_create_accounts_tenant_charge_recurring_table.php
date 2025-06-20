<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_tenant_charge_recurring', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('tenant_charge_recurring_id');
            $table->integer('tenant_charge_recurring_tenant_charge_id')->nullable();
            $table->integer('tenant_charge_recurring_tenancy_id')->nullable();
            $table->smallInteger('tenant_charge_recurring_frequency')->nullable();
            $table->tinyInteger('tenant_charge_recurring_frequency_unit')->nullable();
            $table->date('tenant_charge_recurring_start_date')->nullable();
            $table->date('tenant_charge_recurring_end_date')->nullable();
            $table->date('tenant_charge_recurring_next_processing_date')->nullable();
            $table->tinyInteger('tenant_charge_recurring_suspended')->nullable();
            $table->dateTime('tenant_charge_recurring_date_created')->nullable();
            $table->dateTime('tenant_charge_recurring_date_updated')->nullable();
            $table->integer('tenant_charge_recurring_created_by')->nullable();
            $table->integer('tenant_charge_recurring_updated_by')->nullable();
        });
        DB::statement("ALTER TABLE accounts_tenant_charge_recurring ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('accounts_tenant_charge_recurring');
    }
};
