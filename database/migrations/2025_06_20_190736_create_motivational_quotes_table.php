<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('motivational_quotes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('motivational_quotes_id');
            $table->text('motivational_quotes_text')->nullable();
        });
        DB::statement("ALTER TABLE motivational_quotes ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('motivational_quotes');
    }
};
