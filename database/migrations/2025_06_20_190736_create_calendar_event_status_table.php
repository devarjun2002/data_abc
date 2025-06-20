<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('calendar_event_status', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('calendar_event_status_id');
            $table->string('calendar_event_status_name', 15)->nullable();
            $table->string('calendar_event_status_display_name', 15)->nullable();
        });
        DB::statement("ALTER TABLE calendar_event_status ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('calendar_event_status');
    }
};
