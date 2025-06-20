<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('applicant_requirement_filter_student', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('applicant_requirement_filter_id');
            $table->string('applicant_requirement_filter_name', 15)->nullable();
            $table->text('applicant_requirement_filter_description')->nullable();
            $table->tinyInteger('applicant_requirement_filter_sort')->nullable();
        });
        DB::statement("ALTER TABLE applicant_requirement_filter_student ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('applicant_requirement_filter_student');
    }
};
