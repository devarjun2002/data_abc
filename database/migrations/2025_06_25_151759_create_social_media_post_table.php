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
            $table->id('social_media_post_id');
            $table->text('social_media_post_name')->nullable();
            $table->smallInteger('social_media_post_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('social_media_post');
    }
};
