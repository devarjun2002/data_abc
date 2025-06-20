<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('works_room', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('works_room_id');
            $table->text('works_room_name')->nullable();
            $table->tinyInteger('works_room_sort')->nullable();
        });
        DB::statement("ALTER TABLE works_room ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('works_room');
    }
};
