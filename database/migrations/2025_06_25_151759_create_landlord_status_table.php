<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('landlord_status', function (Blueprint $table) {
            $table->id('landlord_status_id');
            $table->string('landlord_status_name', 15)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('landlord_status');
    }
};
