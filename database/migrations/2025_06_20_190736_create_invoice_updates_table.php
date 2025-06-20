<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('invoice_updates', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('invoice_updates_id');
            $table->integer('invoice_updates_invoice_id')->nullable();
            $table->text('invoice_updates_private_notes')->nullable();
            $table->dateTime('invoice_updates_date_created')->nullable();
            $table->integer('invoice_updates_created_by')->nullable();
        });
        DB::statement("ALTER TABLE invoice_updates ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('invoice_updates');
    }
};
