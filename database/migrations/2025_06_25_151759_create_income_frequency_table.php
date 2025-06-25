<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('income_frequency', function (Blueprint $table) {
            $table->id('income_frequency_id');
            $table->string('income_frequency_name', 15)->nullable();
            $table->smallInteger('income_frequency_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('income_frequency');
    }
};
