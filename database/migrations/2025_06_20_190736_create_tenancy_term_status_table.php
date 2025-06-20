<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenancy_term_status', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('tenancy_term_status_id');
            $table->string('tenancy_term_status_name', 20)->nullable();
        });
        DB::statement("ALTER TABLE tenancy_term_status ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('tenancy_term_status');
    }
};
