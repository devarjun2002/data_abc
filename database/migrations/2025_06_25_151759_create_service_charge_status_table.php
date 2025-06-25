<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('service_charge_status', function (Blueprint $table) {
            $table->id('service_charge_status_id');
            $table->text('service_charge_status_name')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_charge_status');
    }
};
