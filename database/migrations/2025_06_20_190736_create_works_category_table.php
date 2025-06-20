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
            $table->engine = 'InnoDB';
            $table->increments('works_category_id');
            $table->text('works_category_name')->nullable();
            $table->tinyInteger('works_category_sort')->nullable();
        });
        DB::statement("ALTER TABLE works_category ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('works_category');
    }
};
