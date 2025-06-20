<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('title', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('title_id');
            $table->string('title_name', 10)->nullable();
        });
        DB::statement("ALTER TABLE title ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('title');
    }
};
