<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('alarm_code', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('alarm_code_id');
            $table->integer('alarm_code_property')->nullable();
            $table->string('alarm_code_code', 10)->nullable();
            $table->tinyInteger('alarm_code_type')->nullable();
            $table->text('alarm_code_notes')->nullable();
            $table->date('alarm_code_date_added')->nullable();
            $table->integer('alarm_code_created_by')->nullable();
        });
        DB::statement("ALTER TABLE alarm_code ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('alarm_code');
    }
};
