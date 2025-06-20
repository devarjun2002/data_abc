<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_tenant_charge_line', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('tenant_charge_line_id');
            $table->integer('tenant_charge_id')->nullable();
            $table->tinyInteger('tenant_charge_line_type')->nullable();
            $table->text('tenant_charge_line_description')->nullable();
            $table->decimal('tenant_charge_line_amount')->nullable();
            $table->tinyInteger('tenant_charge_line_vat_rate')->nullable();
            $table->decimal('tenant_charge_line_vat_amount')->nullable();
        });
        DB::statement("ALTER TABLE accounts_tenant_charge_line ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('accounts_tenant_charge_line');
    }
};
