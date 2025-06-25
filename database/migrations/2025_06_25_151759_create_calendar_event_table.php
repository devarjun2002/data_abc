<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('calendar_event', function (Blueprint $table) {
            $table->id('calendar_event_id');
            $table->string('calendar_event_token', 40)->nullable();
            $table->integer('calendar_event_company_id')->nullable();
            $table->integer('calendar_event_branch_id')->nullable();
            $table->text('calendar_event_subject')->nullable();
            $table->smallInteger('calendar_event_status')->nullable();
            $table->dateTime('calendar_event_start')->nullable();
            $table->dateTime('calendar_event_end')->nullable();
            $table->text('calendar_event_location')->nullable();
            $table->smallInteger('calendar_event_type')->nullable();
            $table->integer('calendar_event_employee')->nullable();
            $table->text('calendar_event_description')->nullable();
            $table->integer('calendar_event_attendee_type')->nullable();
            $table->integer('calendar_event_property')->nullable();
            $table->integer('calendar_event_tenancy')->nullable();
            $table->integer('calendar_event_development')->nullable();
            $table->integer('calendar_event_applicant')->nullable();
            $table->integer('calendar_event_valuation')->nullable();
            $table->smallInteger('calendar_event_valuation_appointment_type')->nullable();
            $table->smallInteger('calendar_event_valuation_meeting_with')->nullable();
            $table->smallInteger('calendar_event_meet_at')->nullable();
            $table->dateTime('calendar_event_date_created')->nullable();
            $table->dateTime('calendar_event_date_updated')->nullable();
            $table->integer('calendar_event_created_by')->nullable();
            $table->integer('calendar_event_updated_by')->nullable();
            $table->smallInteger('calendar_event_confirmed_landlord_vendor')->nullable();
            $table->smallInteger('calendar_event_confirmed_applicant')->nullable();
            $table->text('calendar_event_notes')->nullable();
            $table->text('calendar_event_private_notes')->nullable();
            $table->integer('calendar_event_branch')->nullable();
            $table->integer('calendar_event_recurring_id')->nullable();
            $table->text('calendar_event_cancellation_reason')->nullable();
            $table->text('calendar_event_surveyor_company_name')->nullable();
            $table->text('calendar_event_surveyor_individual_name')->nullable();
            $table->string('calendar_event_surveyor_phone_number', 20)->nullable();
            $table->text('calendar_event_surveyor_behalf_of')->nullable();
            $table->integer('calendar_event_directory')->nullable();
            $table->smallInteger('calendar_event_inspection_type')->nullable();
            $table->smallInteger('calendar_event_survey_type')->nullable();
            $table->smallInteger('calendar_event_time_off_type')->nullable();
            $table->smallInteger('calendar_event_time_off_reason')->nullable();
            $table->smallInteger('calendar_event_time_off_pay')->nullable();
            $table->smallInteger('calendar_event_time_off_lunch_break')->nullable();
            $table->text('calendar_event_time_off_notes')->nullable();
            $table->smallInteger('calendar_event_time_off_linked_sickness')->nullable();
            $table->smallInteger('calendar_event_bulk_email')->nullable();
            $table->integer('calendar_event_letting_application')->nullable();
            $table->smallInteger('calendar_event_viewing_length_override')->nullable();
            $table->smallInteger('calendar_event_extra_hours_reward_type')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('calendar_event');
    }
};
