<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('works_status', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('works_status_id');
            $table->string('works_status_name', 40)->nullable();
            $table->tinyInteger('works_status_sort')->nullable();
        });
        DB::statement("ALTER TABLE works_status ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('works_status');
    }
};
