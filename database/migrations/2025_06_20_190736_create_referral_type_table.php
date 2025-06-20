<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('referral_type', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('referral_type_id');
            $table->string('referral_type_name', 30)->nullable();
        });
        DB::statement("ALTER TABLE referral_type ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('referral_type');
    }
};
