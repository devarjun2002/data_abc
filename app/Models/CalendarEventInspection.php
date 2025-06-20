<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarEventInspection extends Model
{
    protected $table = 'calendar_event_inspection';
    protected $primaryKey = 'calendar_event_inspection_id';
    public $timestamps = false;
    protected $guarded = [];

    public function event()
    {
        return $this->belongsTo(CalendarEvent::class, 'calendar_event_inspection_calendar_event_id', 'calendar_event_id');
    }
    public function cleanliness()
    {
        return $this->belongsTo(CalendarEventInspectionCleanliness::class, 'calendar_event_inspection_cleanliness', 'calendar_event_inspection_cleanliness_id');
    }
}
