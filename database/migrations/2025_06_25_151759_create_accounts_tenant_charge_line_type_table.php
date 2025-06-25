<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_tenant_charge_line_type', function (Blueprint $table) {
            $table->id('tenant_charge_line_type_id');
            $table->string('tenant_charge_line_type_name', 30)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounts_tenant_charge_line_type');
    }
};
