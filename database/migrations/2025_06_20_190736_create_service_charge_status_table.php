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
            $table->engine = 'InnoDB';
            $table->increments('service_charge_status_id');
            $table->text('service_charge_status_name')->nullable();
        });
        DB::statement("ALTER TABLE service_charge_status ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('service_charge_status');
    }
};
