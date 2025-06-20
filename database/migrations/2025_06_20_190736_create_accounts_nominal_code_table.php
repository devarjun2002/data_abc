<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_nominal_code', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->smallInteger('nominal_code_id')->nullable();
            $table->primary('nominal_code_id');
            $table->string('nominal_code_name', 40)->nullable();
            $table->tinyInteger('nominal_code_type')->nullable();
            $table->smallInteger('nominal_code_external_id')->nullable();
            $table->tinyInteger('nominal_code_default_vat_rate')->nullable();
            $table->tinyInteger('nominal_code_archive')->nullable();
        });
        DB::statement("ALTER TABLE accounts_nominal_code ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('accounts_nominal_code');
    }
};
