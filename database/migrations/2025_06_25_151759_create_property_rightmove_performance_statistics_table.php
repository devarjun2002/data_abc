<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_rightmove_performance_statistics', function (Blueprint $table) {
            $table->id('prps_id');
            $table->date('prps_date')->nullable();
            $table->integer('prps_property_id')->nullable();
            $table->smallInteger('prps_property_availability')->nullable();
            $table->integer('prps_property_status')->nullable();
            $table->smallInteger('prps_featured_property')->nullable();
            $table->smallInteger('prps_premium_listing')->nullable();
            $table->integer('prps_total_summary_views')->nullable();
            $table->integer('prps_total_detail_views')->nullable();
            $table->decimal('prps_click_through_rate', 10, 2)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_rightmove_performance_statistics');
    }
};
