<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('branch_opening_hours_day', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 20)->nullable();
        });
        DB::statement("ALTER TABLE branch_opening_hours_day ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('branch_opening_hours_day');
    }
};
