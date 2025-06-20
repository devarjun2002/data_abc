<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('capacity', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('capacity_id');
            $table->text('capacity_name')->nullable();
            $table->text('capacity_name_short')->nullable();
        });
        DB::statement("ALTER TABLE capacity ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('capacity');
    }
};
