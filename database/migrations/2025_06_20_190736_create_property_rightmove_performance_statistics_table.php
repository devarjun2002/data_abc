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
            $table->engine = 'InnoDB';
            $table->increments('prps_id');
            $table->date('prps_date')->nullable();
            $table->integer('prps_property_id')->nullable();
            $table->tinyInteger('prps_property_availability')->nullable();
            $table->integer('prps_property_status')->nullable();
            $table->tinyInteger('prps_featured_property')->nullable();
            $table->tinyInteger('prps_premium_listing')->nullable();
            $table->integer('prps_total_summary_views')->nullable();
            $table->integer('prps_total_detail_views')->nullable();
            $table->decimal('prps_click_through_rate')->nullable();
        });
        DB::statement("ALTER TABLE property_rightmove_performance_statistics ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_rightmove_performance_statistics');
    }
};
