<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_payment_term', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('accounts_payment_term_id');
            $table->text('accounts_payment_term_description')->nullable();
            $table->tinyInteger('accounts_payment_term_sort')->nullable();
        });
        DB::statement("ALTER TABLE accounts_payment_term ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('accounts_payment_term');
    }
};
