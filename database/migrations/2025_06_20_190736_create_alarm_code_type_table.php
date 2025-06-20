<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('alarm_code_type', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('alarm_code_type_id');
            $table->text('alarm_code_type_name')->nullable();
        });
        DB::statement("ALTER TABLE alarm_code_type ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('alarm_code_type');
    }
};
