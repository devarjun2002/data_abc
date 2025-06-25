<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('valuation_updates', function (Blueprint $table) {
            $table->id('valuation_updates_id');
            $table->integer('valuation_updates_valuation_id')->nullable();
            $table->text('valuation_updates_public_notes')->nullable();
            $table->text('valuation_updates_private_notes')->nullable();
            $table->smallInteger('valuation_updates_notify_landlord_vendor')->nullable();
            $table->dateTime('valuation_updates_date_created')->nullable();
            $table->integer('valuation_updates_created_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('valuation_updates');
    }
};
