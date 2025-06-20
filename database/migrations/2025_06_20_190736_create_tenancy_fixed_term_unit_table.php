<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenancy_fixed_term_unit', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('tenancy_fixed_term_unit_id');
            $table->string('tenancy_fixed_term_unit_name', 10)->nullable();
        });
        DB::statement("ALTER TABLE tenancy_fixed_term_unit ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('tenancy_fixed_term_unit');
    }
};
