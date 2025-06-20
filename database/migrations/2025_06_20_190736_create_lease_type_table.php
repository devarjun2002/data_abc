<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('lease_type', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('lease_type_id');
            $table->string('lease_type_name', 30)->nullable();
        });
        DB::statement("ALTER TABLE lease_type ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('lease_type');
    }
};
