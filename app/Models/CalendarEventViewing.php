<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarEventViewing extends Model
{
    protected $table = 'calendar_event_viewing';
    protected $primaryKey = 'calendar_event_viewing_id';
    public $timestamps = false;
    protected $fillable = [];

    // Add relationships here if you add foreign keys to other tables, e.g. events, etc.
    public function event()
    {
        return $this->belongsTo(CalendarEvent::class, 'calendar_event_id', 'calendar_event_id');
    }
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'calendar_event_viewing_created_by', 'employee_id');
    }
    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'calendar_event_viewing_updated_by', 'employee_id');
    }
    public function confidenceLevel()
    {
        return $this->belongsTo(CalendarEventConfidence::class, 'calendar_event_viewing_confidence_level', 'calendar_event_confidence_id');
    }
    public function type()
    {
        return $this->belongsTo(CalendarEventViewingType::class, 'calendar_event_viewing_type', 'calendar_event_viewing_type_id');
    }
}
