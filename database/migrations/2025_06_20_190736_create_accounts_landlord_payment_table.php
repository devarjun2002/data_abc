<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_landlord_payment', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('landlord_payment_id');
            $table->date('landlord_payment_date')->nullable();
            $table->integer('landlord_payment_tenancy_id')->nullable();
            $table->decimal('landlord_payment_amount')->nullable();
            $table->tinyInteger('landlord_payment_method')->nullable();
            $table->text('landlord_payment_notes')->nullable();
            $table->dateTime('landlord_payment_date_created')->nullable();
            $table->dateTime('landlord_payment_date_updated')->nullable();
            $table->integer('landlord_payment_created_by')->nullable();
            $table->integer('landlord_payment_updated_by')->nullable();
        });
        DB::statement("ALTER TABLE accounts_landlord_payment ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('accounts_landlord_payment');
    }
};
