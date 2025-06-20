<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarEventStatus extends Model
{
    protected $table = 'calendar_event_status';
    protected $primaryKey = 'calendar_event_status_id';
    public $timestamps = false;
    protected $guarded = [];

    public function events()
    {
        return $this->hasMany(CalendarEvent::class, 'calendar_event_status', 'calendar_event_status_id');
    }
}
