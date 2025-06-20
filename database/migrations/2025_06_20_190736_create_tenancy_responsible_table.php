<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenancy_responsible', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('tenancy_responsible_id');
            $table->string('tenancy_responsible_name', 35)->nullable();
        });
        DB::statement("ALTER TABLE tenancy_responsible ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('tenancy_responsible');
    }
};
