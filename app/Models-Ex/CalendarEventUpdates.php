<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarEventUpdates extends Model
{
    protected $table = 'calendar_event_updates';
    protected $primaryKey = 'calendar_event_updates_id';
    public $timestamps = false;
    protected $fillable = [];

    // Add relationships here if you add foreign keys to other tables, e.g. events, etc.
    public function event()
    {
        return $this->belongsTo(CalendarEvent::class, 'calendar_event_id', 'calendar_event_id');
    }
}
