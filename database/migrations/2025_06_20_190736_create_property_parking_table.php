<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_parking', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('property_parking_id');
            $table->text('property_parking_name')->nullable();
        });
        DB::statement("ALTER TABLE property_parking ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_parking');
    }
};
