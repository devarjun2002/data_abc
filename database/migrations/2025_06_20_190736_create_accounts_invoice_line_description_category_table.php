<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_invoice_line_description_category', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('invoice_line_description_category_id');
            $table->string('invoice_line_description_category_name', 30)->nullable();
            $table->tinyInteger('invoice_line_description_category_sort')->nullable();
        });
        DB::statement("ALTER TABLE accounts_invoice_line_description_category ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('accounts_invoice_line_description_category');
    }
};
