<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sale_finance', function (Blueprint $table) {
            $table->id('sale_finance_id');
            $table->text('sale_finance_name')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sale_finance');
    }
};
