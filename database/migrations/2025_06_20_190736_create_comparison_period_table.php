<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('comparison_period', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('comparison_period_id');
            $table->text('comparison_period_name')->nullable();
            $table->tinyInteger('comparison_period_sort')->nullable();
        });
        DB::statement("ALTER TABLE comparison_period ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('comparison_period');
    }
};
