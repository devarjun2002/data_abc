<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('gender', function (Blueprint $table) {
            $table->id('gender_id');
            $table->string('gender_name', 6)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gender');
    }
};
