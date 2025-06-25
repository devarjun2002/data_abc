<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('referral_status', function (Blueprint $table) {
            $table->id('referral_status_id');
            $table->string('referral_status_name', 30)->nullable();
            $table->smallInteger('referral_status_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('referral_status');
    }
};
