<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_vat_rate', function (Blueprint $table) {
            $table->id('vat_rate_id');
            $table->decimal('vat_rate_amount', 10, 2)->nullable();
            $table->string('vat_rate_name', 10)->nullable();
            $table->string('vat_rate_description', 20)->nullable();
            $table->decimal('vat_rate_multiplier', 10, 2)->nullable();
            $table->text('vat_rate_external_id')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounts_vat_rate');
    }
};
