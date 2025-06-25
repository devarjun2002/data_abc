<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('calendar_event_location', function (Blueprint $table) {
            $table->id('calendar_event_location_id');
            $table->text('calendar_event_location_name')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('calendar_event_location');
    }
};
