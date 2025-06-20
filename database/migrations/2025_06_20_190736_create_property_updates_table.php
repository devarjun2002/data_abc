<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_updates', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('property_updates_id');
            $table->integer('property_updates_property_id')->nullable();
            $table->text('property_updates_notes_public')->nullable();
            $table->text('property_updates_notes_private')->nullable();
            $table->date('property_updates_property_next_review_date')->nullable();
            $table->text('property_updates_property_next_review_notes')->nullable();
            $table->tinyInteger('property_updates_notify_landlord_vendor')->nullable();
            $table->dateTime('property_updates_date_created')->nullable();
            $table->integer('property_updates_created_by')->nullable();
        });
        DB::statement("ALTER TABLE property_updates ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_updates');
    }
};
