<?php

namespace App\Models;
use App\Models\Applicant;
use App\Models\Application;
use App\Models\Branch;
use App\Models\CalendarEventAttendeeType;
use App\Models\CalendarEventInspectionType;
use App\Models\CalendarEventMeetAt;
use App\Models\CalendarEventRecurring;
use App\Models\CalendarEventStatus;
use App\Models\CalendarEventSurveyType;
use App\Models\CalendarEventTimeOffPay;
use App\Models\CalendarEventTimeOffReason;
use App\Models\CalendarEventTimeOffType;
use App\Models\CalendarEventType;
use App\Models\Company;
use App\Models\Development;
use App\Models\Directory;
use App\Models\Employee;
use App\Models\ExtraHoursRewardType;
use App\Models\Property;
use App\Models\Tenancy;
use App\Models\Valuation;
use App\Models\ValuationAppointmentType;
use App\Models\ValuationMeetingWith;

use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    protected $table = 'calendar_event';
    protected $primaryKey = 'calendar_event_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'calendar_event_date_created' => 'datetime',
        'calendar_event_date_updated' => 'datetime',
    ];

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

    // Relationships --done
    public function applicant()
    {
        return $this->belongsTo(Applicant::class, 'calendar_event_applicant', 'applicant_id');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'calendar_event_branch', 'branch_id');
    }

    public function branchById()
    {
        return $this->belongsTo(Branch::class, 'calendar_event_branch_id', 'branch_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'calendar_event_company_id', 'company_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'calendar_event_created_by', 'employee_id');
    }

    public function development()
    {
        return $this->belongsTo(Development::class, 'calendar_event_development', 'development_id');
    }

    public function directory()
    {
        return $this->belongsTo(Directory::class, 'calendar_event_directory', 'directory_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'calendar_event_employee', 'employee_id');
    }

    public function property()
    {
        return $this->belongsTo(Property::class, 'calendar_event_property', 'property_id');
    }

    public function tenancy()
    {
        return $this->belongsTo(Tenancy::class, 'calendar_event_tenancy', 'tenancy_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'calendar_event_updated_by', 'employee_id');
    }

    public function valuation()
    {
        return $this->belongsTo(Valuation::class, 'calendar_event_valuation', 'valuation_id');
    }

    public function status()
    {
        return $this->belongsTo(CalendarEventStatus::class, 'calendar_event_status', 'calendar_event_status_id');
    }

    public function type()
    {
        return $this->belongsTo(CalendarEventType::class, 'calendar_event_type', 'calendar_event_type_id');
    }

    public function attendeeType()
    {
        return $this->belongsTo(CalendarEventAttendeeType::class, 'calendar_event_attendee_type', 'calendar_event_attendee_type_id');
    }

    public function valuationAppointmentType()
    {
        return $this->belongsTo(ValuationAppointmentType::class, 'calendar_event_valuation_appointment_type', 'valuation_appointment_type_id');
    }

    public function valuationMeetingWith()
    {
        return $this->belongsTo(ValuationMeetingWith::class, 'calendar_event_valuation_meeting_with', 'valuation_meeting_with_id');
    }

    public function meetAt()
    {
        return $this->belongsTo(CalendarEventMeetAt::class, 'calendar_event_meet_at', 'calendar_event_meet_at_id');
    }

    public function recurring()
    {
        return $this->belongsTo(CalendarEventRecurring::class, 'calendar_event_recurring_id', 'calendar_event_recurring_id');
    }

    public function inspectionType()
    {
        return $this->belongsTo(CalendarEventInspectionType::class, 'calendar_event_inspection_type', 'calendar_event_inspection_type_id');
    }

    public function surveyType()
    {
        return $this->belongsTo(CalendarEventSurveyType::class, 'calendar_event_survey_type', 'calendar_event_survey_type_id');
    }

    public function timeOffType()
    {
        return $this->belongsTo(CalendarEventTimeOffType::class, 'calendar_event_time_off_type', 'calendar_event_time_off_type_id');
    }

    public function timeOffReason()
    {
        return $this->belongsTo(CalendarEventTimeOffReason::class, 'calendar_event_time_off_reason', 'calendar_event_time_off_reason_id');
    }

    public function timeOffPay()
    {
        return $this->belongsTo(CalendarEventTimeOffPay::class, 'calendar_event_time_off_pay', 'calendar_event_time_off_pay_id');
    }

    public function lettingApplication()
    {
        return $this->belongsTo(Application::class, 'calendar_event_letting_application', 'application_id');
    }

    public function extraHoursRewardType()
    {
        return $this->belongsTo(ExtraHoursRewardType::class, 'calendar_event_extra_hours_reward_type', 'id');
    }
    // Reverse Relationships
public function calendarFileses()
    {
        return $this->hasMany(CalendarFiles::class, 'calendar_event_id', 'calendar_event_id');
    }
}