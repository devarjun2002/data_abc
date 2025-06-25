<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('suburb', function (Blueprint $table) {
            $table->id('suburb_id');
            $table->text('suburb_name')->nullable();
            $table->text('suburb_description')->nullable();
            $table->integer('suburb_branch')->nullable();
            $table->smallInteger('suburb_active')->nullable();
            $table->smallInteger('suburb_property_requirements')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('suburb');
    }
};
