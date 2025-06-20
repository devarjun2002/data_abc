<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('calendar_event_time_off_pay', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('calendar_event_time_off_pay_id');
            $table->string('calendar_event_time_off_pay_name', 10)->nullable();
        });
        DB::statement("ALTER TABLE calendar_event_time_off_pay ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('calendar_event_time_off_pay');
    }
};
