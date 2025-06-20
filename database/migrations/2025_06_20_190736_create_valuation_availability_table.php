<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('valuation_availability', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('valuation_availability_id');
            $table->string('valuation_availability_name', 20)->nullable();
            $table->tinyInteger('valuation_availability_archived')->nullable();
        });
        DB::statement("ALTER TABLE valuation_availability ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('valuation_availability');
    }
};
