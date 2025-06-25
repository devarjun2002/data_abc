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
            $table->id('application_status_id');
            $table->text('application_status_name')->nullable();
            $table->smallInteger('application_status_sort')->nullable();
            $table->smallInteger('application_status_archived')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('application_status');
    }
};
