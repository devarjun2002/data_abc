<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_status', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('property_status_id')->nullable();
            $table->primary('property_status_id');
            $table->string('property_status_name', 35)->nullable();
            $table->tinyInteger('property_status_type')->nullable();
            $table->string('property_status_name_short', 20)->nullable();
        });
        DB::statement("ALTER TABLE property_status ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_status');
    }
};
