<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('probate_status', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('probate_status_id');
            $table->string('probate_status_name', 30)->nullable();
            $table->tinyInteger('probate_status_sort')->nullable();
        });
        DB::statement("ALTER TABLE probate_status ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('probate_status');
    }
};
