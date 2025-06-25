<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('website_search', function (Blueprint $table) {
            $table->id('website_search_id');
            $table->text('website_search_locations')->nullable();
            $table->dateTime('website_search_date_added')->nullable();
            $table->decimal('website_search_longitude', 10, 2)->nullable();
            $table->decimal('website_search_latitude', 10, 2)->nullable();
            $table->text('website_search_type')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('website_search');
    }
};
