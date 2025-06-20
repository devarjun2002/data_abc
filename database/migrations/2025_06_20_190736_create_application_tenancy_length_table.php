<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('application_tenancy_length', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('application_tenancy_length_id');
            $table->string('application_tenancy_length_name', 25)->nullable();
        });
        DB::statement("ALTER TABLE application_tenancy_length ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('application_tenancy_length');
    }
};
