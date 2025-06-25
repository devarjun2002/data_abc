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
            $table->id('valuation_log_status_id');
            $table->integer('valuation_id')->nullable();
            $table->smallInteger('valuation_status_old')->nullable();
            $table->smallInteger('valuation_status_new')->nullable();
            $table->integer('valuation_updated_by')->nullable();
            $table->dateTime('valuation_date_updated')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('valuation_log_status');
    }
};
