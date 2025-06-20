<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('social_media_post', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('social_media_post_id');
            $table->text('social_media_post_name')->nullable();
            $table->tinyInteger('social_media_post_sort')->nullable();
        });
        DB::statement("ALTER TABLE social_media_post ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('social_media_post');
    }
};
