<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('applicant_requirement_suburb', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ars_id');
            $table->integer('ar_id')->nullable();
            $table->integer('ar_suburb_id')->nullable();
        });
        DB::statement("ALTER TABLE applicant_requirement_suburb ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('applicant_requirement_suburb');
    }
};
