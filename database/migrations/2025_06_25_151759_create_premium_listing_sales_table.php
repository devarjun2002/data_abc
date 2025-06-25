<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('premium_listing_sales', function (Blueprint $table) {
            $table->id('premium_listing_id');
            $table->text('premium_listing_name')->nullable();
            $table->smallInteger('premium_listing_archive')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('premium_listing_sales');
    }
};
