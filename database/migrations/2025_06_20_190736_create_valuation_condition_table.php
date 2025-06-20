<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('valuation_condition', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('valuation_condition_id');
            $table->string('valuation_condition_name', 30)->nullable();
            $table->tinyInteger('valuation_condition_sort')->nullable();
        });
        DB::statement("ALTER TABLE valuation_condition ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('valuation_condition');
    }
};
