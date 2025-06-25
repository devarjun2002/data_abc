<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_vendor', function (Blueprint $table) {
            $table->id('property_vendor_id');
            $table->integer('property_id')->nullable();
            $table->integer('vendor_id')->nullable();
            $table->smallInteger('vendor_lead')->nullable();
            $table->smallInteger('vendor_official')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_vendor');
    }
};
