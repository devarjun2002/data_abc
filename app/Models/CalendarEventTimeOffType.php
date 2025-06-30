<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarEventTimeOffType extends Model
{
    protected $table = 'calendar_event_time_off_type';
    protected $primaryKey = 'calendar_event_time_off_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'calendar_event_time_off_type_name'
    ];

    // Relationships --done
    public function events()
    {
        return $this->hasMany(CalendarEvent::class, 'calendar_event_time_off_type', 'calendar_event_time_off_type_id');
    }
    // Reverse Relationships
public function calendarEvents()
    {
        return $this->hasMany(CalendarEvent::class, 'calendar_event_time_off_type', 'calendar_event_time_off_type_id');
    }
}