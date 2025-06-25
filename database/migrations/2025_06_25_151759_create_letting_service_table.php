<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('letting_service', function (Blueprint $table) {
            $table->id('letting_service_id');
            $table->text('letting_service_name')->nullable();
            $table->string('letting_service_name_short', 10)->nullable();
            $table->smallInteger('letting_service_archived')->nullable();
            $table->smallInteger('letting_service_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('letting_service');
    }
};
