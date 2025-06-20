<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_category', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('property_category_id');
            $table->string('property_category_name', 20)->nullable();
        });
        DB::statement("ALTER TABLE property_category ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_category');
    }
};
