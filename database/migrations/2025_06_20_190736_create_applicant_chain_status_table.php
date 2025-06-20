<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('applicant_chain_status', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('applicant_chain_status_id');
            $table->text('applicant_chain_status_name')->nullable();
            $table->tinyInteger('applicant_chain_status_sort')->nullable();
        });
        DB::statement("ALTER TABLE applicant_chain_status ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('applicant_chain_status');
    }
};
