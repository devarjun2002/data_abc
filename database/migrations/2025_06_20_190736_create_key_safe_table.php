<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('key_safe', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('key_safe_id');
            $table->integer('key_safe_property')->nullable();
            $table->integer('key_safe_development')->nullable();
            $table->string('key_safe_code', 10)->nullable();
            $table->tinyInteger('key_safe_location')->nullable();
            $table->text('key_safe_contains')->nullable();
            $table->text('key_safe_notes')->nullable();
            $table->date('key_safe_date_added')->nullable();
            $table->integer('key_safe_created_by')->nullable();
        });
        DB::statement("ALTER TABLE key_safe ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('key_safe');
    }
};
