<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('vendor_status', function (Blueprint $table) {
            $table->id('vendor_status_id');
            $table->string('vendor_status_name', 15)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vendor_status');
    }
};
