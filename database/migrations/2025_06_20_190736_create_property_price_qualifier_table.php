<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_price_qualifier', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->tinyInteger('price_qualifier_id')->nullable();
            $table->primary('price_qualifier_id');
            $table->text('price_qualifier_name')->nullable();
            $table->string('price_qualifier_name_short', 20)->nullable();
        });
        DB::statement("ALTER TABLE property_price_qualifier ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_price_qualifier');
    }
};
