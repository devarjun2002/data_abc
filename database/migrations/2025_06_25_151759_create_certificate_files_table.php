<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('certificate_files', function (Blueprint $table) {
            $table->id('file_id');
            $table->integer('certificate_id')->nullable();
            $table->text('filename')->nullable();
            $table->dateTime('date_added')->nullable();
            $table->smallInteger('sort')->nullable();
            $table->text('caption')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('certificate_files');
    }
};
