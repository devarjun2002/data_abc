<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('media_type', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('media_type_id');
            $table->text('media_type_name')->nullable();
        });
        DB::statement("ALTER TABLE media_type ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('media_type');
    }
};
