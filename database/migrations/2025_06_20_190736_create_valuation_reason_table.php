<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('valuation_reason', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('valuation_reason_id');
            $table->text('valuation_reason_name')->nullable();
        });
        DB::statement("ALTER TABLE valuation_reason ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('valuation_reason');
    }
};
