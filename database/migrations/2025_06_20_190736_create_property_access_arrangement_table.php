<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_access_arrangement', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('property_access_arrangement_id');
            $table->string('property_access_arrangement_name', 30)->nullable();
            $table->tinyInteger('property_access_arrangement_sort')->nullable();
        });
        DB::statement("ALTER TABLE property_access_arrangement ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_access_arrangement');
    }
};
