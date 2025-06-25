<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rent_legal_expenses_insurance_status', function (Blueprint $table) {
            $table->id('rleis_id');
            $table->text('rleis_name')->nullable();
            $table->smallInteger('rleis_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rent_legal_expenses_insurance_status');
    }
};
