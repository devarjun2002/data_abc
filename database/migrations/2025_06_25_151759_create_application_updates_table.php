<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('application_updates', function (Blueprint $table) {
            $table->id('application_updates_id');
            $table->integer('application_updates_application_id')->nullable();
            $table->text('application_updates_public_notes')->nullable();
            $table->text('application_updates_private_notes')->nullable();
            $table->smallInteger('application_updates_notify_landlord')->nullable();
            $table->smallInteger('application_updates_notify_applicant')->nullable();
            $table->dateTime('application_updates_date_created')->nullable();
            $table->integer('application_updates_created_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('application_updates');
    }
};
