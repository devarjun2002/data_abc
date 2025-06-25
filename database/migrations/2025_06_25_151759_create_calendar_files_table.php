<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('calendar_files', function (Blueprint $table) {
            $table->id('calendar_files_id');
            $table->integer('calendar_event_id')->nullable();
            $table->text('calendar_files_filename')->nullable();
            $table->text('calendar_files_caption')->nullable();
            $table->dateTime('calendar_files_date_added')->nullable();
            $table->string('calendar_files_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('calendar_files');
    }
};
