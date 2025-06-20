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
            $table->engine = 'InnoDB';
            $table->increments('property_vendor_id');
            $table->integer('property_id')->nullable();
            $table->integer('vendor_id')->nullable();
            $table->tinyInteger('vendor_lead')->nullable();
            $table->tinyInteger('vendor_official')->nullable();
        });
        DB::statement("ALTER TABLE property_vendor ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_vendor');
    }
};
