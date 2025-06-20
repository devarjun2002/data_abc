<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_files', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('file_id');
            $table->integer('property_id')->nullable();
            $table->text('filename')->nullable();
            $table->text('caption')->nullable();
            $table->dateTime('date_added')->nullable();
            $table->string('sort')->nullable();
        });
        DB::statement("ALTER TABLE property_files ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_files');
    }
};
