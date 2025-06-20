<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('local_authority_ward', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('local_authority_ward_id');
            $table->text('local_authority_ward_name')->nullable();
            $table->tinyInteger('local_authority_ward_selective_licencing')->nullable();
            $table->date('local_authority_ward_selective_licencing_start_date')->nullable();
            $table->date('local_authority_ward_selective_licencing_end_date')->nullable();
            $table->integer('local_authority_id')->nullable();
        });
        DB::statement("ALTER TABLE local_authority_ward ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('local_authority_ward');
    }
};
