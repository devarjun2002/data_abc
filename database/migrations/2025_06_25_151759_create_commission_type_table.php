<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('commission_type', function (Blueprint $table) {
            $table->id('commission_type_id');
            $table->text('commission_type_name')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('commission_type');
    }
};
