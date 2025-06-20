<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('gender', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('gender_id');
            $table->string('gender_name', 6)->nullable();
        });
        DB::statement("ALTER TABLE gender ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('gender');
    }
};
