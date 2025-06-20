<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bank', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('bank_id');
            $table->text('bank_name')->nullable();
        });
        DB::statement("ALTER TABLE bank ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('bank');
    }
};
