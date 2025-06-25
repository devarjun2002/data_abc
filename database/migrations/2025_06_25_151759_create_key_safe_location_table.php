<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('key_safe_location', function (Blueprint $table) {
            $table->id('key_safe_location_id');
            $table->text('key_safe_location_name')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('key_safe_location');
    }
};
