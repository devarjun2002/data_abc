<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('fee_type', function (Blueprint $table) {
            $table->id('fee_type_id');
            $table->text('fee_type_name')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fee_type');
    }
};
