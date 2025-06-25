<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sale_status', function (Blueprint $table) {
            $table->id('sale_status_id');
            $table->string('sale_status_name', 30)->nullable();
            $table->smallInteger('sale_status_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sale_status');
    }
};
