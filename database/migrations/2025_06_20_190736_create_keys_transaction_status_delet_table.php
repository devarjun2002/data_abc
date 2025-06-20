<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('keys_transaction_status_delet', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('keys_transaction_status_id');
            $table->string('keys_transaction_status_name', 15)->nullable();
            $table->tinyInteger('keys_transaction_status_sort')->nullable();
        });
        DB::statement("ALTER TABLE keys_transaction_status_delet ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('keys_transaction_status_delet');
    }
};
