<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_use_class', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('property_use_class_id')->nullable();
            $table->primary('property_use_class_id');
            $table->text('property_use_class_name')->nullable();
        });
        DB::statement("ALTER TABLE property_use_class ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_use_class');
    }
};
