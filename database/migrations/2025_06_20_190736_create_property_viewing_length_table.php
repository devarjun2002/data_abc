<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_viewing_length', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('property_viewing_length_id');
            $table->string('property_viewing_length_name', 20)->nullable();
            $table->tinyInteger('property_viewing_length_minutes')->nullable();
            $table->tinyInteger('property_viewing_length_sort')->nullable();
        });
        DB::statement("ALTER TABLE property_viewing_length ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_viewing_length');
    }
};
