<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('utility_provider', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('utility_provider_id');
            $table->text('utility_provider_name')->nullable();
        });
        DB::statement("ALTER TABLE utility_provider ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('utility_provider');
    }
};
