<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenancy_guarantors', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('tenancy_guarantors_id');
            $table->integer('guarantor_id')->nullable();
            $table->integer('tenancy_id')->nullable();
        });
        DB::statement("ALTER TABLE tenancy_guarantors ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('tenancy_guarantors');
    }
};
