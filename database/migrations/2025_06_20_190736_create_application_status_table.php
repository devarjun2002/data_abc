<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('application_status', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('application_status_id');
            $table->text('application_status_name')->nullable();
            $table->tinyInteger('application_status_sort')->nullable();
            $table->tinyInteger('application_status_archived')->nullable();
        });
        DB::statement("ALTER TABLE application_status ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('application_status');
    }
};
