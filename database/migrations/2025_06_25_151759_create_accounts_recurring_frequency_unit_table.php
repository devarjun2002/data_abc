<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_recurring_frequency_unit', function (Blueprint $table) {
            $table->id('recurring_frequency_unit_id');
            $table->string('recurring_frequency_unit_name', 20)->nullable();
            $table->smallInteger('recurring_frequency_unit_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounts_recurring_frequency_unit');
    }
};
