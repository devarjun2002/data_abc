<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('certificate_updates', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('certificate_updates_id');
            $table->integer('certificate_updates_certificate_id')->nullable();
            $table->text('certificate_updates_public_notes')->nullable();
            $table->text('certificate_updates_private_notes')->nullable();
            $table->tinyInteger('certificate_updates_notify_landlord')->nullable();
            $table->tinyInteger('certificate_updates_notify_contractor')->nullable();
            $table->dateTime('certificate_updates_date_created')->nullable();
            $table->integer('certificate_updates_created_by')->nullable();
        });
        DB::statement("ALTER TABLE certificate_updates ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('certificate_updates');
    }
};
