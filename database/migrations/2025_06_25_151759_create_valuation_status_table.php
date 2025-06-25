<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('valuation_status', function (Blueprint $table) {
            $table->id('valuation_status_id');
            $table->text('valuation_status_name')->nullable();
            $table->smallInteger('valuation_status_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('valuation_status');
    }
};
