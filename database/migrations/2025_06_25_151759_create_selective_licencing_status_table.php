<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('selective_licencing_status', function (Blueprint $table) {
            $table->id('selective_licencing_status_id');
            $table->text('selective_licencing_status_name')->nullable();
            $table->smallInteger('selective_licencing_status_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('selective_licencing_status');
    }
};
