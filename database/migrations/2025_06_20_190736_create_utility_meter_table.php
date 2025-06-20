<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('utility_meter', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('utility_meter_id');
            $table->integer('utility_meter_property')->nullable();
            $table->tinyInteger('utility_meter_utility')->nullable();
            $table->tinyInteger('utility_meter_type')->nullable();
            $table->tinyInteger('utility_meter_location')->nullable();
            $table->text('utility_meter_notes')->nullable();
            $table->integer('utility_meter_provider')->nullable();
        });
        DB::statement("ALTER TABLE utility_meter ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('utility_meter');
    }
};
