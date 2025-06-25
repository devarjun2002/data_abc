<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('applicant_requirement_property_subtype', function (Blueprint $table) {
            $table->id('arps_id');
            $table->integer('ar_id')->nullable();
            $table->integer('ar_property_type_id')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('applicant_requirement_property_subtype');
    }
};
