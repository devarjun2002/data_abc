<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenancy_property_part', function (Blueprint $table) {
            $table->id('tenancy_property_part_id');
            $table->string('tenancy_property_part_name', 4)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenancy_property_part');
    }
};
