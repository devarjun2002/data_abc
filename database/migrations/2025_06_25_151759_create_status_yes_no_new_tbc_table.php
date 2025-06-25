<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('status_yes_no_new_tbc', function (Blueprint $table) {
            $table->id('status_yes_no_id');
            $table->string('status_yes_no_name', 3)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('status_yes_no_new_tbc');
    }
};
