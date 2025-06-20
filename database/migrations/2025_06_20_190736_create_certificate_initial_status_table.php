<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('certificate_initial_status', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('certificate_initial_status_id');
            $table->text('certificate_initial_status_name')->nullable();
            $table->tinyInteger('certificate_initial_status_sort')->nullable();
        });
        DB::statement("ALTER TABLE certificate_initial_status ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('certificate_initial_status');
    }
};
