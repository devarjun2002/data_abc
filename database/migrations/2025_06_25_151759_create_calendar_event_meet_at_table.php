<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('calendar_event_meet_at', function (Blueprint $table) {
            $table->id('calendar_event_meet_at_id');
            $table->string('calendar_event_meet_at_name', 10)->nullable();
            $table->smallInteger('calendar_event_meet_at_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('calendar_event_meet_at');
    }
};
