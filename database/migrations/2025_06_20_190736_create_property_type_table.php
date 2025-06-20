<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_type', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('property_type_id')->nullable();
            $table->primary('property_type_id');
            $table->text('property_type_name')->nullable();
            $table->integer('property_type_group')->nullable();
            $table->tinyInteger('property_type_active')->nullable();
        });
        DB::statement("ALTER TABLE property_type ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_type');
    }
};
