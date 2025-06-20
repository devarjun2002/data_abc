<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenancy_additional_clauses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('tenancy_additional_clauses_id');
            $table->text('tenancy_additional_clauses_description')->nullable();
            $table->integer('tenancy_id')->nullable();
        });
        DB::statement("ALTER TABLE tenancy_additional_clauses ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('tenancy_additional_clauses');
    }
};
