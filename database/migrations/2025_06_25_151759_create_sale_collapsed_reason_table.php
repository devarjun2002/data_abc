<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sale_collapsed_reason', function (Blueprint $table) {
            $table->id('sale_collapsed_reason_id');
            $table->text('sale_collapsed_reason_name')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sale_collapsed_reason');
    }
};
