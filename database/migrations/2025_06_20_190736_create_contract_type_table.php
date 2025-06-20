<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('contract_type', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('contract_type_id');
            $table->string('contract_type_name', 30)->nullable();
            $table->text('contract_type_description')->nullable();
            $table->tinyInteger('contract_type_sort')->nullable();
        });
        DB::statement("ALTER TABLE contract_type ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('contract_type');
    }
};
