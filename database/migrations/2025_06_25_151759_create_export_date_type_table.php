<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('export_date_type', function (Blueprint $table) {
            $table->id('export_date_type_id');
            $table->text('export_date_type_name')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('export_date_type');
    }
};
