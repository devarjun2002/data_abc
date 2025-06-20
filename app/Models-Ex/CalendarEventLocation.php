<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarEventLocation extends Model
{
    protected $table = 'calendar_event_location';
    protected $primaryKey = 'calendar_event_location_id';
    public $timestamps = false;
    protected $fillable = [];

    // Add relationships here if you add foreign keys to other tables, e.g. events, etc.
    public function events()
    {
        return $this->hasMany(CalendarEvent::class, 'calendar_event_location_id', 'calendar_event_location_id');
    }
}
