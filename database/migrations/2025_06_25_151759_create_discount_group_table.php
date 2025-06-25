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
            $table->id('discount_group_id');
            $table->text('discount_group_name')->nullable();
            $table->smallInteger('discount_group_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('discount_group');
    }
};
