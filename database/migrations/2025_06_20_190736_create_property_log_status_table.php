<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_log_status', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('property_log_status_id');
            $table->integer('property_id')->nullable();
            $table->integer('property_status_old')->nullable();
            $table->integer('property_status_new')->nullable();
            $table->text('property_status_notes')->nullable();
            $table->tinyInteger('property_published')->nullable();
            $table->integer('property_updated_by')->nullable();
            $table->dateTime('property_date_updated')->nullable();
        });
        DB::statement("ALTER TABLE property_log_status ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_log_status');
    }
};
