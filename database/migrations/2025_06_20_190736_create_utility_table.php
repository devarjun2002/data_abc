<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('utility', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('utility_id');
            $table->string('utility_name', 15)->nullable();
        });
        DB::statement("ALTER TABLE utility ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('utility');
    }
};
