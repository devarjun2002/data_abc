<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_type_group', function (Blueprint $table) {
            $table->id('property_type_group_id');
            $table->string('property_type_group_name', 20)->nullable();
            $table->smallInteger('property_type_group_active')->nullable();
            $table->smallInteger('property_type_group_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_type_group');
    }
};
