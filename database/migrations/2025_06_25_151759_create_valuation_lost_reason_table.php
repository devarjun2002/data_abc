<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('valuation_lost_reason', function (Blueprint $table) {
            $table->id('valuation_lost_reason_id');
            $table->text('valuation_lost_reason_name')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('valuation_lost_reason');
    }
};
