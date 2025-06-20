<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('works_files', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('works_files_id');
            $table->integer('works_id')->nullable();
            $table->text('works_files_filename')->nullable();
            $table->text('works_files_caption')->nullable();
            $table->dateTime('works_files_date_added')->nullable();
            $table->string('works_files_sort')->nullable();
        });
        DB::statement("ALTER TABLE works_files ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('works_files');
    }
};
