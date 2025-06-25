<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('calendar_event_inspection', function (Blueprint $table) {
            $table->id('calendar_event_inspection_id');
            $table->integer('calendar_event_inspection_calendar_event_id')->nullable();
            $table->smallInteger('calendar_event_inspection_cleanliness')->nullable();
            $table->smallInteger('calendar_event_inspection_gardens')->nullable();
            $table->smallInteger('calendar_event_inspection_pets')->nullable();
            $table->smallInteger('calendar_event_inspection_smoking')->nullable();
            $table->smallInteger('calendar_event_inspection_additional_occupants')->nullable();
            $table->smallInteger('calendar_event_inspection_mould')->nullable();
            $table->text('calendar_event_inspection_public_notes')->nullable();
            $table->text('calendar_event_inspection_private_notes')->nullable();
            $table->text('calendar_event_inspection_repair_requests')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('calendar_event_inspection');
    }
};
