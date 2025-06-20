<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('calendar_event_recurring', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('calendar_event_recurring_id');
            $table->integer('calendar_event_recurring_calendar_event_id')->nullable();
            $table->smallInteger('calendar_event_recurring_frequency')->nullable();
            $table->tinyInteger('calendar_event_recurring_frequency_unit')->nullable();
            $table->date('calendar_event_recurring_start_date')->nullable();
            $table->date('calendar_event_recurring_next_processing_date')->nullable();
            $table->tinyInteger('calendar_event_recurring_suspended')->nullable();
        });
        DB::statement("ALTER TABLE calendar_event_recurring ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('calendar_event_recurring');
    }
};
