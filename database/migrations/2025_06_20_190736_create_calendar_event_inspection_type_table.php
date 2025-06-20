<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('calendar_event_inspection_type', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('calendar_event_inspection_type_id');
            $table->text('calendar_event_inspection_type_name')->nullable();
            $table->tinyInteger('calendar_event_inspection_type_sort')->nullable();
        });
        DB::statement("ALTER TABLE calendar_event_inspection_type ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('calendar_event_inspection_type');
    }
};
