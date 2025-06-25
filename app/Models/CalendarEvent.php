<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CalendarEvent extends Model
{
    protected $table = 'calendar_event';
    protected $primaryKey = 'calendar_event_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'calendar_event_token',
        'calendar_event_company_id',
        'calendar_event_branch_id',
        'calendar_event_subject',
        'calendar_event_status',
        'calendar_event_start',
        'calendar_event_end',
        'calendar_event_location',
        'calendar_event_type',
        'calendar_event_employee',
        'calendar_event_description',
        'calendar_event_attendee_type',
        'calendar_event_property',
        'calendar_event_tenancy',
        'calendar_event_development',
        'calendar_event_applicant',
        'calendar_event_valuation',
        'calendar_event_valuation_appointment_type',
        'calendar_event_valuation_meeting_with',
        'calendar_event_meet_at',
        'calendar_event_date_created',
        'calendar_event_date_updated',
        'calendar_event_created_by',
        'calendar_event_updated_by',
        'calendar_event_confirmed_landlord_vendor',
        'calendar_event_confirmed_applicant',
        'calendar_event_notes',
        'calendar_event_private_notes',
        'calendar_event_branch',
        'calendar_event_recurring_id',
        'calendar_event_cancellation_reason',
        'calendar_event_surveyor_company_name',
        'calendar_event_surveyor_individual_name',
        'calendar_event_surveyor_phone_number',
        'calendar_event_surveyor_behalf_of',
        'calendar_event_directory',
        'calendar_event_inspection_type',
        'calendar_event_survey_type',
        'calendar_event_time_off_type',
        'calendar_event_time_off_reason',
        'calendar_event_time_off_pay',
        'calendar_event_time_off_lunch_break',
        'calendar_event_time_off_notes',
        'calendar_event_time_off_linked_sickness',
        'calendar_event_bulk_email',
        'calendar_event_letting_application',
        'calendar_event_viewing_length_override',
        'calendar_event_extra_hours_reward_type'
    ];

    // Relationships
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'calendar_event_company_id', 'company_id');
    }

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'calendar_event_branch_id', 'branch_id');
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(CalendarEventType::class, 'calendar_event_type', 'calendar_event_type_id');
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(CalendarEventStatus::class, 'calendar_event_status', 'calendar_event_status_id');
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'calendar_event_employee', 'employee_id');
    }

    public function attendeeType(): BelongsTo
    {
        return $this->belongsTo(CalendarEventAttendeeType::class, 'calendar_event_attendee_type', 'calendar_event_attendee_type_id');
    }

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'calendar_event_property', 'property_id');
    }

    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(PropertyTenancy::class, 'calendar_event_tenancy', 'property_tenancy_id');
    }

    public function development(): BelongsTo
    {
        return $this->belongsTo(Development::class, 'calendar_event_development', 'development_id');
    }

    public function applicant(): BelongsTo
    {
        return $this->belongsTo(Applicant::class, 'calendar_event_applicant', 'applicant_id');
    }

    public function valuation(): BelongsTo
    {
        return $this->belongsTo(PropertyValuation::class, 'calendar_event_valuation', 'property_valuation_id');
    }

    public function meetAt(): BelongsTo
    {
        return $this->belongsTo(CalendarEventMeetAt::class, 'calendar_event_meet_at', 'calendar_event_meet_at_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'calendar_event_created_by', 'employee_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'calendar_event_updated_by', 'employee_id');
    }

    public function recurring(): BelongsTo
    {
        return $this->belongsTo(CalendarEventRecurring::class, 'calendar_event_recurring_id', 'calendar_event_recurring_id');
    }

    public function directory(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'calendar_event_directory', 'directory_id');
    }

    public function inspectionType(): BelongsTo
    {
        return $this->belongsTo(CalendarEventInspectionType::class, 'calendar_event_inspection_type', 'calendar_event_inspection_type_id');
    }

    public function surveyType(): BelongsTo
    {
        return $this->belongsTo(CalendarEventSurveyType::class, 'calendar_event_survey_type', 'calendar_event_survey_type_id');
    }

    public function timeOffType(): BelongsTo
    {
        return $this->belongsTo(CalendarEventTimeOffType::class, 'calendar_event_time_off_type', 'calendar_event_time_off_type_id');
    }

    public function timeOffReason(): BelongsTo
    {
        return $this->belongsTo(CalendarEventTimeOffReason::class, 'calendar_event_time_off_reason', 'calendar_event_time_off_reason_id');
    }

    public function timeOffPay(): BelongsTo
    {
        return $this->belongsTo(CalendarEventTimeOffPay::class, 'calendar_event_time_off_pay', 'calendar_event_time_off_pay_id');
    }

    public function extraHoursRewardType(): BelongsTo
    {
        return $this->belongsTo(ExtraHoursRewardType::class, 'calendar_event_extra_hours_reward_type', 'extra_hours_reward_type_id');
    }

    public function updates(): HasMany
    {
        return $this->hasMany(CalendarEventUpdates::class, 'calendar_event_id', 'calendar_event_id');
    }

    public function viewings(): HasMany
    {
        return $this->hasMany(CalendarEventViewing::class, 'calendar_event_id', 'calendar_event_id');
    }

    public function inspections(): HasMany
    {
        return $this->hasMany(CalendarEventInspection::class, 'calendar_event_inspection_calendar_event_id', 'calendar_event_id');
    }

    public function files(): HasMany
    {
        return $this->hasMany(CalendarFiles::class, 'calendar_files_calendar_event_id', 'calendar_event_id');
    }
}
