<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('local_authority_branch_reference', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('local_authority_branch_reference_id');
            $table->integer('local_authority_id')->nullable();
            $table->integer('branch_id')->nullable();
            $table->string('local_authority_branch_reference', 20)->nullable();
        });
        DB::statement("ALTER TABLE local_authority_branch_reference ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('local_authority_branch_reference');
    }
};
