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
            $table->engine = 'InnoDB';
            $table->increments('call_queue_groups_id');
            $table->text('call_queue_groups_name')->nullable();
            $table->tinyInteger('call_queue_groups_extension')->nullable();
            $table->text('call_queue_groups_description')->nullable();
        });
        DB::statement("ALTER TABLE call_queue_groups ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('call_queue_groups');
    }
};
