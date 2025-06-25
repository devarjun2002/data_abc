<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('valuation_type', function (Blueprint $table) {
            $table->id('valuation_type_id');
            $table->string('valuation_type_name', 25)->nullable();
            $table->text('valuation_type_name2')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('valuation_type');
    }
};
