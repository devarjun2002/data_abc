<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('export_data', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('export_data_id');
            $table->tinyInteger('export_data_type')->nullable();
            $table->dateTime('export_data_date_exported')->nullable();
            $table->dateTime('export_data_last_invoice_posted_date')->nullable();
            $table->dateTime('export_data_last_invoice_credit_posted_date')->nullable();
            $table->dateTime('export_data_last_bacs_file_entry_date')->nullable();
        });
        DB::statement("ALTER TABLE export_data ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('export_data');
    }
};
