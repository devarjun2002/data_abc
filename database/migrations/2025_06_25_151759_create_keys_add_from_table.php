<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('keys_add_from', function (Blueprint $table) {
            $table->id('keys_add_from_id');
            $table->text('keys_add_from_name')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('keys_add_from');
    }
};
