<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenancy_updates', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('tenancy_updates_id');
            $table->integer('tenancy_updates_tenancy_id')->nullable();
            $table->text('tenancy_updates_public_notes')->nullable();
            $table->text('tenancy_updates_private_notes')->nullable();
            $table->tinyInteger('tenancy_updates_notify_tenants')->nullable();
            $table->tinyInteger('tenancy_updates_notify_landlord')->nullable();
            $table->tinyInteger('tenancy_updates_notify_accounts')->nullable();
            $table->dateTime('tenancy_updates_date_created')->nullable();
            $table->integer('tenancy_updates_created_by')->nullable();
        });
        DB::statement("ALTER TABLE tenancy_updates ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('tenancy_updates');
    }
};
