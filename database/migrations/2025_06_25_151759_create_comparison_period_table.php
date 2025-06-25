<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('comparison_period', function (Blueprint $table) {
            $table->id('comparison_period_id');
            $table->text('comparison_period_name')->nullable();
            $table->smallInteger('comparison_period_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comparison_period');
    }
};
