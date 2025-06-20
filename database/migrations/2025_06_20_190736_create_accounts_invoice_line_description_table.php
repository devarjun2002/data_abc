<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_invoice_line_description', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('invoice_line_description_id');
            $table->text('invoice_line_description_name')->nullable();
            $table->tinyInteger('invoice_line_description_sort')->nullable();
            $table->smallInteger('invoice_line_nominal_code')->nullable();
            $table->tinyInteger('invoice_line_description_category')->nullable();
            $table->decimal('invoice_line_description_amount')->nullable();
        });
        DB::statement("ALTER TABLE accounts_invoice_line_description ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('accounts_invoice_line_description');
    }
};
