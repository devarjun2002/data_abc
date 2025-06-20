<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarEventAttendeeType extends Model
{
    protected $table = 'calendar_event_attendee_type';
    protected $primaryKey = 'calendar_event_attendee_type_id';
    public $timestamps = false;
    protected $guarded = [];

    public function events()
    {
        return $this->hasMany(CalendarEvent::class, 'calendar_event_attendee_type', 'calendar_event_attendee_type_id');
    }
}
