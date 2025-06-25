<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('lease_type', function (Blueprint $table) {
            $table->id('lease_type_id');
            $table->string('lease_type_name', 30)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lease_type');
    }
};
