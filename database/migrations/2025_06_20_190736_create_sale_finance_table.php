<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sale_finance', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('sale_finance_id');
            $table->text('sale_finance_name')->nullable();
        });
        DB::statement("ALTER TABLE sale_finance ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('sale_finance');
    }
};
