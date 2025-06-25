<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('guarantor_income', function (Blueprint $table) {
            $table->id('guarantor_income_id');
            $table->integer('guarantor_income_guarantor_id')->nullable();
            $table->decimal('guarantor_income_amount', 10, 2)->nullable();
            $table->smallInteger('guarantor_income_frequency')->nullable();
            $table->text('guarantor_income_source')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('guarantor_income');
    }
};
