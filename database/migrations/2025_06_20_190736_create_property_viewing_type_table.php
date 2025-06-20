<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_viewing_type', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('property_viewing_type_id');
            $table->string('property_viewing_type_name', 20)->nullable();
            $table->text('property_viewing_type_description')->nullable();
        });
        DB::statement("ALTER TABLE property_viewing_type ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_viewing_type');
    }
};
