<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('directory_status', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('directory_status_id');
            $table->string('directory_status_name', 15)->nullable();
        });
        DB::statement("ALTER TABLE directory_status ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('directory_status');
    }
};
