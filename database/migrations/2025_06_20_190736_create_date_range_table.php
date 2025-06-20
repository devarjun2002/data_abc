<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('date_range', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('date_range_id');
            $table->text('date_range_name')->nullable();
            $table->tinyInteger('date_range_sort')->nullable();
            $table->text('date_range_period')->nullable();
            $table->string('date_range_date_format', 20)->nullable();
            $table->tinyInteger('date_range_group')->nullable();
        });
        DB::statement("ALTER TABLE date_range ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('date_range');
    }
};
