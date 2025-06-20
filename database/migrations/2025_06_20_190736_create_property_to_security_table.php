<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_to_security', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('property_to_security_id');
            $table->integer('property_id')->nullable();
            $table->tinyInteger('property_security_id')->nullable();
        });
        DB::statement("ALTER TABLE property_to_security ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_to_security');
    }
};
