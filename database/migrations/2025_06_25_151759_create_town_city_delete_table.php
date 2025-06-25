<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('town_city_delete', function (Blueprint $table) {
            $table->id('town_city_id');
            $table->text('town_city_name')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('town_city_delete');
    }
};
