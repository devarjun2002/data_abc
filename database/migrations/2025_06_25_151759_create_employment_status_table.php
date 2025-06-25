<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employment_status', function (Blueprint $table) {
            $table->id('employment_status_id');
            $table->string('employment_status_name', 20)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employment_status');
    }
};
