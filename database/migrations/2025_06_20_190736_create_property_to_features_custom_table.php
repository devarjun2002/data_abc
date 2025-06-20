<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_to_features_custom', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('property_to_features_custom_id');
            $table->integer('property_id')->nullable();
            $table->text('property_feature')->nullable();
        });
        DB::statement("ALTER TABLE property_to_features_custom ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_to_features_custom');
    }
};
