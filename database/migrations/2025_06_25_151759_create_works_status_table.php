<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('works_status', function (Blueprint $table) {
            $table->id('works_status_id');
            $table->string('works_status_name', 40)->nullable();
            $table->smallInteger('works_status_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('works_status');
    }
};
