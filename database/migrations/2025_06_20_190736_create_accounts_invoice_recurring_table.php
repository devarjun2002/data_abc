<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_invoice_recurring', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('invoice_recurring_id');
            $table->integer('invoice_recurring_invoice_id')->nullable();
            $table->smallInteger('invoice_recurring_frequency')->nullable();
            $table->tinyInteger('invoice_recurring_frequency_unit')->nullable();
            $table->date('invoice_recurring_start_date')->nullable();
            $table->date('invoice_recurring_next_processing_date')->nullable();
            $table->tinyInteger('invoice_recurring_suspended')->nullable();
        });
        DB::statement("ALTER TABLE accounts_invoice_recurring ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('accounts_invoice_recurring');
    }
};
