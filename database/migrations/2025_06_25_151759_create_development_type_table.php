<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('development_type', function (Blueprint $table) {
            $table->id('development_type_id');
            $table->string('development_type_name', 30)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('development_type');
    }
};
