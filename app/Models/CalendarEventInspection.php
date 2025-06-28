<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarEventInspection extends Model
{
    protected $table = 'calendar_event_inspection';
    protected $primaryKey = 'calendar_event_inspection_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'calendar_event_inspection_calendar_event_id',
        'calendar_event_inspection_cleanliness',
        'calendar_event_inspection_gardens',
        'calendar_event_inspection_pets',
        'calendar_event_inspection_smoking',
        'calendar_event_inspection_additional_occupants',
        'calendar_event_inspection_mould',
        'calendar_event_inspection_public_notes',
        'calendar_event_inspection_private_notes',
        'calendar_event_inspection_repair_requests'
    ];

    // Relationships --done
    public function calendarEvent()
    {
        return $this->belongsTo(CalendarEvent::class, 'calendar_event_inspection_calendar_event_id', 'calendar_event_id');
    }

    public function cleanliness()
    {
        return $this->belongsTo(CalendarEventInspectionCleanliness::class, 'calendar_event_inspection_cleanliness', 'calendar_event_inspection_cleanliness_id');
    }

    public function gardens()
    {
        return $this->belongsTo(CalendarEventInspectionCleanliness::class, 'calendar_event_inspection_gardens', 'calendar_event_inspection_cleanliness_id');
    }
}
