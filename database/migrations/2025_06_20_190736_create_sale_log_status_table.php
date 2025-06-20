<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sale_log_status', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('sale_log_status_id');
            $table->integer('sale_id')->nullable();
            $table->tinyInteger('sale_status_old')->nullable();
            $table->tinyInteger('sale_status_new')->nullable();
            $table->integer('sale_updated_by')->nullable();
            $table->dateTime('sale_date_updated')->nullable();
        });
        DB::statement("ALTER TABLE sale_log_status ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('sale_log_status');
    }
};
