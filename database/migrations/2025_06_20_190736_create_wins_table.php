<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('wins', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('win_id');
            $table->text('win_name')->nullable();
            $table->dateTime('win_date_created')->nullable();
        });
        DB::statement("ALTER TABLE wins ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('wins');
    }
};
