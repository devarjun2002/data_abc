<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('directory_category', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('directory_category_id');
            $table->text('directory_category_name')->nullable();
            $table->tinyInteger('directory_category_contractor')->nullable();
        });
        DB::statement("ALTER TABLE directory_category ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('directory_category');
    }
};
