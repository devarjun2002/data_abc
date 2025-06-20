<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('vehicle', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('vehicle_id');
            $table->string('vehicle_registration', 10)->nullable();
            $table->string('vehicle_make_model', 30)->nullable();
            $table->tinyInteger('vehicle_archived')->nullable();
        });
        DB::statement("ALTER TABLE vehicle ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('vehicle');
    }
};
