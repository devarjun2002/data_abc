<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('status_yes_no_new', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('status_yes_no_id');
            $table->string('status_yes_no_name', 3)->nullable();
        });
        DB::statement("ALTER TABLE status_yes_no_new ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('status_yes_no_new');
    }
};
