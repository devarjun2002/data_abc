<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('survey_status', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('survey_status_id');
            $table->string('survey_status_name', 20)->nullable();
            $table->tinyInteger('survey_status_sort')->nullable();
        });
        DB::statement("ALTER TABLE survey_status ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('survey_status');
    }
};
