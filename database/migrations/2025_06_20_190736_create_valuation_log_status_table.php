<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('valuation_log_status', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('valuation_log_status_id');
            $table->integer('valuation_id')->nullable();
            $table->tinyInteger('valuation_status_old')->nullable();
            $table->tinyInteger('valuation_status_new')->nullable();
            $table->integer('valuation_updated_by')->nullable();
            $table->dateTime('valuation_date_updated')->nullable();
        });
        DB::statement("ALTER TABLE valuation_log_status ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('valuation_log_status');
    }
};
