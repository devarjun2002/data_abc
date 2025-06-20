<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('letting_type', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('letting_type_id');
            $table->string('letting_type_name', 10)->nullable();
        });
        DB::statement("ALTER TABLE letting_type ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('letting_type');
    }
};
