<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('nationality', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('nationality_id');
            $table->text('nationality_name')->nullable();
        });
        DB::statement("ALTER TABLE nationality ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('nationality');
    }
};
