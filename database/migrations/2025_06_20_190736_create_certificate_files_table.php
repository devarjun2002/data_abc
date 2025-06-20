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
            $table->engine = 'InnoDB';
            $table->increments('file_id');
            $table->integer('certificate_id')->nullable();
            $table->text('filename')->nullable();
            $table->dateTime('date_added')->nullable();
            $table->tinyInteger('sort')->nullable();
            $table->text('caption')->nullable();
        });
        DB::statement("ALTER TABLE certificate_files ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('certificate_files');
    }
};
