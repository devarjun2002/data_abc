<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('calendar_event_attendee_type', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('calendar_event_attendee_type_id');
            $table->string('calendar_event_attendee_type_name', 30)->nullable();
            $table->text('calendar_event_attendee_type_survey_name')->nullable();
        });
        DB::statement("ALTER TABLE calendar_event_attendee_type ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('calendar_event_attendee_type');
    }
};
