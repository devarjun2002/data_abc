<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sale_collapsed_reason', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('sale_collapsed_reason_id');
            $table->text('sale_collapsed_reason_name')->nullable();
        });
        DB::statement("ALTER TABLE sale_collapsed_reason ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('sale_collapsed_reason');
    }
};
