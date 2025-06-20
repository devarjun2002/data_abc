<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_log_price', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('property_log_price_id');
            $table->integer('property_id')->nullable();
            $table->decimal('property_price_old')->nullable();
            $table->decimal('property_price_new')->nullable();
            $table->tinyInteger('property_published')->nullable();
            $table->integer('property_updated_by')->nullable();
            $table->dateTime('property_date_updated')->nullable();
        });
        DB::statement("ALTER TABLE property_log_price ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_log_price');
    }
};
