<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('works_updates', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('works_updates_id');
            $table->integer('works_updates_works_id')->nullable();
            $table->text('works_updates_public_notes')->nullable();
            $table->text('works_updates_private_notes')->nullable();
            $table->tinyInteger('works_updates_notify_landlords')->nullable();
            $table->tinyInteger('works_updates_notify_tenants')->nullable();
            $table->tinyInteger('works_updates_notify_contractor')->nullable();
            $table->tinyInteger('works_updates_notify_works_dept')->nullable();
            $table->dateTime('works_updates_date_created')->nullable();
            $table->integer('works_updates_created_by')->nullable();
        });
        DB::statement("ALTER TABLE works_updates ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('works_updates');
    }
};
