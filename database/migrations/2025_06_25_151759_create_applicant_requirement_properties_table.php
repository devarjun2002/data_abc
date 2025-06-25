<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('applicant_requirement_properties', function (Blueprint $table) {
            $table->id('arp_id');
            $table->integer('ar_id')->nullable();
            $table->integer('applicant_id')->nullable();
            $table->integer('property_id')->nullable();
            $table->dateTime('arp_date_created')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('applicant_requirement_properties');
    }
};
