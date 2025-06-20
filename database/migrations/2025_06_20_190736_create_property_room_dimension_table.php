<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_room_dimension', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->tinyInteger('property_room_dimension_id')->nullable();
            $table->primary('property_room_dimension_id');
            $table->string('property_room_dimension_name', 30)->nullable();
        });
        DB::statement("ALTER TABLE property_room_dimension ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_room_dimension');
    }
};
