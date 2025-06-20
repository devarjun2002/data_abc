<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarEventConfidence extends Model
{
    protected $table = 'calendar_event_confidence';
    protected $primaryKey = 'calendar_event_confidence_id';
    public $timestamps = false;
    protected $guarded = [];

    public function events()
    {
        return $this->hasMany(CalendarEvent::class, 'calendar_event_confidence', 'calendar_event_confidence_id');
    }

    public function viewings()
    {
        return $this->hasMany(CalendarEventViewing::class, 'calendar_event_viewing_confidence_level', 'calendar_event_confidence_id');
    }
}
