<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('calendar_event_viewing', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('calendar_event_viewing_id');
            $table->integer('calendar_event_viewing_calendar_event_id')->nullable();
            $table->text('calendar_event_viewing_pros')->nullable();
            $table->text('calendar_event_viewing_cons')->nullable();
            $table->decimal('calendar_event_viewing_ptp')->nullable();
            $table->tinyInteger('calendar_event_viewing_confidence_level')->nullable();
            $table->text('calendar_event_viewing_public_notes')->nullable();
            $table->text('calendar_event_viewing_private_notes')->nullable();
            $table->tinyInteger('calendar_event_viewing_type')->nullable();
            $table->tinyInteger('calendar_event_viewings_referral_solicitor')->nullable();
            $table->tinyInteger('calendar_event_viewings_referral_mortgage')->nullable();
            $table->tinyInteger('calendar_event_viewings_referral_valuation')->nullable();
            $table->text('calendar_event_viewing_next_review_date')->nullable();
            $table->dateTime('calendar_event_viewing_date_created')->nullable();
            $table->dateTime('calendar_event_viewing_date_updated')->nullable();
            $table->integer('calendar_event_viewing_created_by')->nullable();
            $table->integer('calendar_event_viewing_updated_by')->nullable();
        });
        DB::statement("ALTER TABLE calendar_event_viewing ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('calendar_event_viewing');
    }
};
