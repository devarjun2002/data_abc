<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('extra_hours_reward_type', function (Blueprint $table) {
            $table->id('id');
            $table->text('name')->nullable();
            $table->smallInteger('sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('extra_hours_reward_type');
    }
};
