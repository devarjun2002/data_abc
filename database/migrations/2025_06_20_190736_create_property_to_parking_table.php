<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_to_parking', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('property_to_parking_id');
            $table->integer('property_id')->nullable();
            $table->integer('property_parking_id')->nullable();
        });
        DB::statement("ALTER TABLE property_to_parking ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_to_parking');
    }
};
