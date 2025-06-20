<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('discount_group', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('discount_group_id');
            $table->text('discount_group_name')->nullable();
            $table->tinyInteger('discount_group_sort')->nullable();
        });
        DB::statement("ALTER TABLE discount_group ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('discount_group');
    }
};
