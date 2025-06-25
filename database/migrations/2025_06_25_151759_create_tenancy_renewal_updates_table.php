<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenancy_renewal_updates', function (Blueprint $table) {
            $table->id('tenancy_renewal_updates_id');
            $table->integer('tenancy_renewal_updates_tenancy_id')->nullable();
            $table->text('tenancy_renewal_updates_public_notes')->nullable();
            $table->text('tenancy_renewal_updates_private_notes')->nullable();
            $table->smallInteger('tenancy_renewal_updates_notify_landlord')->nullable();
            $table->smallInteger('tenancy_renewal_updates_notify_tenants')->nullable();
            $table->smallInteger('tenancy_renewal_updates_notify_accounts')->nullable();
            $table->dateTime('tenancy_renewal_updates_date_created')->nullable();
            $table->integer('tenancy_renewal_updates_created_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenancy_renewal_updates');
    }
};
