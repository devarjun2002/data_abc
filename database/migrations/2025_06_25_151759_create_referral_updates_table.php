<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('referral_updates', function (Blueprint $table) {
            $table->id('referral_updates_id');
            $table->integer('referral_updates_referral_id')->nullable();
            $table->text('referral_updates_public_notes')->nullable();
            $table->text('referral_updates_private_notes')->nullable();
            $table->smallInteger('referral_updates_notify_directory_company')->nullable();
            $table->smallInteger('referral_updates_notify_client')->nullable();
            $table->dateTime('referral_updates_date_created')->nullable();
            $table->integer('referral_updates_created_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('referral_updates');
    }
};
