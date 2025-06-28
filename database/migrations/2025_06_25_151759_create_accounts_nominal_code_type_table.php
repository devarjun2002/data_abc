<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts_nominal_code_type', function (Blueprint $table) {
            $table->id('nominal_code_type_id');
            $table->string('nominal_code_type_name', 30)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounts_nominal_code_type');
    }
};
