<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('application_type', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('application_type_id');
            $table->string('application_type_name', 30)->nullable();
        });
        DB::statement("ALTER TABLE application_type ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('application_type');
    }
};
