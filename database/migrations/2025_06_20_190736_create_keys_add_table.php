<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('keys_add', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('keys_add_id');
            $table->integer('keys_add_property')->nullable();
            $table->tinyInteger('keys_add_from')->nullable();
            $table->tinyInteger('keys_add_quantity')->nullable();
            $table->text('keys_add_notes')->nullable();
            $table->dateTime('keys_add_date_created')->nullable();
            $table->dateTime('keys_add_date_updated')->nullable();
            $table->integer('keys_add_created_by')->nullable();
            $table->integer('keys_add_updated_by')->nullable();
        });
        DB::statement("ALTER TABLE keys_add ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('keys_add');
    }
};
