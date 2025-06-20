<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('test', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->text('test_field')->nullable();
        });
        DB::statement("ALTER TABLE test ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('test');
    }
};
