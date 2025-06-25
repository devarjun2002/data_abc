<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('calendar_event_time_off_reason', function (Blueprint $table) {
            $table->id('calendar_event_time_off_reason_id');
            $table->text('calendar_event_time_off_reason_name')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('calendar_event_time_off_reason');
    }
};
