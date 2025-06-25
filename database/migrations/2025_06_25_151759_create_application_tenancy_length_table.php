<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('application_tenancy_length', function (Blueprint $table) {
            $table->id('application_tenancy_length_id');
            $table->string('application_tenancy_length_name', 25)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('application_tenancy_length');
    }
};
