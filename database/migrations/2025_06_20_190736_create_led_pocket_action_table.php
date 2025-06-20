<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('led_pocket_action', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('led_pocket_action_id');
            $table->text('led_pocket_action_name')->nullable();
            $table->tinyInteger('led_pocket_action_sort')->nullable();
        });
        DB::statement("ALTER TABLE led_pocket_action ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('led_pocket_action');
    }
};
