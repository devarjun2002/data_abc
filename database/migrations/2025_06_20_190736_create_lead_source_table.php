<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('lead_source', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('lead_source_id');
            $table->string('lead_source_name', 40)->nullable();
        });
        DB::statement("ALTER TABLE lead_source ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('lead_source');
    }
};
