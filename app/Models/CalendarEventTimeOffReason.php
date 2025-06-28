<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarEventTimeOffReason extends Model
{
    protected $table = 'calendar_event_time_off_reason';
    protected $primaryKey = 'calendar_event_time_off_reason_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'calendar_event_time_off_reason_name'
    ];

    // Relationships --done
    public function events()
    {
        return $this->hasMany(CalendarEvent::class, 'calendar_event_time_off_reason', 'calendar_event_time_off_reason_id');
    }
}
