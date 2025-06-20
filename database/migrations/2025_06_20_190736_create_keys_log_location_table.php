<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('keys_log_location', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('keys_log_location_id');
            $table->integer('property_id')->nullable();
            $table->integer('keys_location')->nullable();
            $table->integer('keys_log_location_updated_by')->nullable();
            $table->dateTime('keys_log_location_date_updated')->nullable();
        });
        DB::statement("ALTER TABLE keys_log_location ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('keys_log_location');
    }
};
