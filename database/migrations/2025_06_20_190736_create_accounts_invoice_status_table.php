<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_invoice_status', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('invoice_status_id');
            $table->text('invoice_status_name')->nullable();
        });
        DB::statement("ALTER TABLE accounts_invoice_status ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('accounts_invoice_status');
    }
};
