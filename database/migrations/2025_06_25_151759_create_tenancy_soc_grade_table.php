<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenancy_soc_grade', function (Blueprint $table) {
            $table->id('tenancy_soc_grade_id');
            $table->string('tenancy_soc_grade_name', 25)->nullable();
            $table->text('tenancy_soc_grade_description')->nullable();
            $table->smallInteger('tenancy_soc_grade_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenancy_soc_grade');
    }
};
