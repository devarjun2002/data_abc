<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('customer_type', function (Blueprint $table) {
            $table->id('customer_type_id');
            $table->string('customer_type_name', 20)->nullable();
            $table->string('customer_type_description', 30)->nullable();
            $table->string('customer_type_description2', 30)->nullable();
            $table->string('customer_type_description3', 10)->nullable();
            $table->text('customer_type_filename')->nullable();
            $table->string('customer_type_url_search_parameter', 30)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('customer_type');
    }
};
