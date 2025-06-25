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
            $table->id('certificate_initial_status_id');
            $table->text('certificate_initial_status_name')->nullable();
            $table->smallInteger('certificate_initial_status_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('certificate_initial_status');
    }
};
