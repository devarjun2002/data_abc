<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('country', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('country_id');
            $table->text('country_name')->nullable();
            $table->string('country_code', 5)->nullable();
        });
        DB::statement("ALTER TABLE country ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('country');
    }
};
