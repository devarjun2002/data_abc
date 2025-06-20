<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('works_log_status', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('works_log_status_id');
            $table->integer('works_id')->nullable();
            $table->tinyInteger('works_status_old')->nullable();
            $table->tinyInteger('works_status_new')->nullable();
            $table->integer('works_updated_by')->nullable();
            $table->dateTime('works_date_updated')->nullable();
        });
        DB::statement("ALTER TABLE works_log_status ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('works_log_status');
    }
};
