<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_temporary_income_type', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('temporary_income_type_id');
            $table->text('temporary_income_type_name')->nullable();
            $table->tinyInteger('temporary_income_type_sort')->nullable();
        });
        DB::statement("ALTER TABLE accounts_temporary_income_type ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('accounts_temporary_income_type');
    }
};
