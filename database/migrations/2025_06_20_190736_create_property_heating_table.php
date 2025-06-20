<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_heating', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('property_heating_id')->nullable();
            $table->primary('property_heating_id');
            $table->string('property_heating_name', 30)->nullable();
        });
        DB::statement("ALTER TABLE property_heating ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_heating');
    }
};
