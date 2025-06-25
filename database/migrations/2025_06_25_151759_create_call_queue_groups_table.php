<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('call_queue_groups', function (Blueprint $table) {
            $table->id('call_queue_groups_id');
            $table->text('call_queue_groups_name')->nullable();
            $table->smallInteger('call_queue_groups_extension')->nullable();
            $table->text('call_queue_groups_description')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('call_queue_groups');
    }
};
