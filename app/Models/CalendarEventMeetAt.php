<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarEventMeetAt extends Model
{
    protected $table = 'calendar_event_meet_at';
    protected $primaryKey = 'calendar_event_meet_at_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'calendar_event_meet_at_name',
        'calendar_event_meet_at_sort'
    ];

    // Relationships --done
    public function events()
    {
        return $this->hasMany(CalendarEvent::class, 'calendar_event_meet_at', 'calendar_event_meet_at_id');
    }
    // Reverse Relationships
public function calendarEvents()
    {
        return $this->hasMany(CalendarEvent::class, 'calendar_event_meet_at', 'calendar_event_meet_at_id');
    }
}