<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('possession_status_completion', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('possession_status_completion_id');
            $table->string('possession_status_completion_name', 30)->nullable();
            $table->tinyInteger('possession_status_completion_sort')->nullable();
        });
        DB::statement("ALTER TABLE possession_status_completion ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('possession_status_completion');
    }
};
