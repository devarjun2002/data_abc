<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('branch_opening_hours_day', function (Blueprint $table) {
            $table->id('id');
            $table->string('name', 20)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('branch_opening_hours_day');
    }
};
