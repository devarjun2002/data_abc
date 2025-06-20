<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('directory_trades', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('directory_trades_id');
            $table->text('directory_trades_name')->nullable();
        });
        DB::statement("ALTER TABLE directory_trades ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('directory_trades');
    }
};
