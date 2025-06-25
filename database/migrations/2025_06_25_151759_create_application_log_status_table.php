<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('application_log_status', function (Blueprint $table) {
            $table->id('application_log_status_id');
            $table->integer('application_id')->nullable();
            $table->smallInteger('application_status_old')->nullable();
            $table->smallInteger('application_status_new')->nullable();
            $table->integer('application_updated_by')->nullable();
            $table->dateTime('application_date_updated')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('application_log_status');
    }
};
