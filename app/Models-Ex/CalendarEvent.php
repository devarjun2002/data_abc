<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    protected $table = 'calendar_event';
    protected $primaryKey = 'calendar_event_id';
    public $timestamps = false;
    protected $fillable = [];

    // Add relationships here if you add foreign keys to other tables, e.g. location, recurring, survey type, updates, viewing, etc.
    public function location()
    {
        return $this->belongsTo(CalendarEventLocation::class, 'calendar_event_location_id', 'calendar_event_location_id');
    }
    public function recurring()
    {
        return $this->belongsTo(CalendarEventRecurring::class, 'calendar_event_recurring_id', 'calendar_event_recurring_id');
    }
    public function surveyType()
    {
        return $this->belongsTo(CalendarEventSurveyType::class, 'calendar_event_survey_type_id', 'calendar_event_survey_type_id');
    }
    public function updates()
    {
        return $this->hasMany(CalendarEventUpdates::class, 'calendar_event_id', 'calendar_event_id');
    }
    public function viewings()
    {
        return $this->hasMany(CalendarEventViewing::class, 'calendar_event_id', 'calendar_event_id');
    }
    public function attendeeType()
    {
        return $this->belongsTo(CalendarEventAttendeeType::class, 'calendar_event_attendee_type', 'calendar_event_attendee_type_id');
    }
    public function confidence()
    {
        return $this->belongsTo(CalendarEventConfidence::class, 'calendar_event_confidence', 'calendar_event_confidence_id');
    }
    public function inspectionType()
    {
        return $this->belongsTo(CalendarEventInspectionType::class, 'calendar_event_inspection_type', 'calendar_event_inspection_type_id');
    }
    public function inspections()
    {
        return $this->hasMany(CalendarEventInspection::class, 'calendar_event_inspection_calendar_event_id', 'calendar_event_id');
    }
    public function files()
    {
        return $this->hasMany(CalendarFiles::class, 'calendar_event_id', 'calendar_event_id');
    }
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'calendar_event_created_by', 'employee_id');
    }
    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'calendar_event_updated_by', 'employee_id');
    }
    public function directory()
    {
        return $this->belongsTo(Directory::class, 'calendar_event_directory', 'directory_id');
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'calendar_event_branch', 'branch_id');
    }
    public function company()
    {
        return $this->belongsTo(Company::class, 'calendar_event_company_id', 'company_id');
    }
    public function property()
    {
        return $this->belongsTo(Property::class, 'calendar_event_property', 'property_id');
    }
}
