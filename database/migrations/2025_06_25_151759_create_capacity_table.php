<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('capacity', function (Blueprint $table) {
            $table->id('capacity_id');
            $table->text('capacity_name')->nullable();
            $table->text('capacity_name_short')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('capacity');
    }
};
