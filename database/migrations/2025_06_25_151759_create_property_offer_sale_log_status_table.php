<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_offer_sale_log_status', function (Blueprint $table) {
            $table->id('property_offer_sale_log_status_id');
            $table->integer('property_offer_sale_id')->nullable();
            $table->integer('property_offer_sale_status_old')->nullable();
            $table->integer('property_offer_sale_status_new')->nullable();
            $table->integer('property_offer_sale_updated_by')->nullable();
            $table->dateTime('property_offer_sale_date_updated')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_offer_sale_log_status');
    }
};
