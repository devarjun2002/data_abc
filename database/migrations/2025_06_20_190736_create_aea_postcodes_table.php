<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('aea_postcodes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('post_code', 20)->nullable();
            $table->text('lat')->nullable();
            $table->text('lng')->nullable();
        });
        DB::statement("ALTER TABLE aea_postcodes ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('aea_postcodes');
    }
};
