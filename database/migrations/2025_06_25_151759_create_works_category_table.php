<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('works_category', function (Blueprint $table) {
            $table->id('works_category_id');
            $table->text('works_category_name')->nullable();
            $table->smallInteger('works_category_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('works_category');
    }
};
