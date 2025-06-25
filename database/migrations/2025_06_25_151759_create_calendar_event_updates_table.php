<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('calendar_event_updates', function (Blueprint $table) {
            $table->id('calendar_event_updates_id');
            $table->integer('calendar_event_updates_calendar_event_id')->nullable();
            $table->text('calendar_event_updates_private_notes')->nullable();
            $table->dateTime('calendar_event_updates_date_created')->nullable();
            $table->integer('calendar_event_updates_created_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('calendar_event_updates');
    }
};
