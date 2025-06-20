<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('letting_service', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('letting_service_id');
            $table->text('letting_service_name')->nullable();
            $table->string('letting_service_name_short', 10)->nullable();
            $table->tinyInteger('letting_service_archived')->nullable();
            $table->tinyInteger('letting_service_sort')->nullable();
        });
        DB::statement("ALTER TABLE letting_service ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('letting_service');
    }
};
