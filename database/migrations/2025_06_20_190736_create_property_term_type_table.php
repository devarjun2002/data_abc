<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_term_type', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('property_term_type_id')->nullable();
            $table->primary('property_term_type_id');
            $table->string('property_term_type_name', 15)->nullable();
        });
        DB::statement("ALTER TABLE property_term_type ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_term_type');
    }
};
