<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('development_updates', function (Blueprint $table) {
            $table->id('development_updates_id');
            $table->integer('development_updates_development_id')->nullable();
            $table->text('development_updates_notes')->nullable();
            $table->dateTime('development_updates_date_created')->nullable();
            $table->integer('development_updates_created_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('development_updates');
    }
};
