<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenant_income', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('tenant_income_id');
            $table->integer('tenant_income_tenant_id')->nullable();
            $table->decimal('tenant_income_amount')->nullable();
            $table->tinyInteger('tenant_income_frequency')->nullable();
            $table->text('tenant_income_source')->nullable();
        });
        DB::statement("ALTER TABLE tenant_income ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('tenant_income');
    }
};
