<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CalendarEventStatus extends Model
{
    protected $table = 'calendar_event_status';
    protected $primaryKey = 'calendar_event_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'calendar_event_status_name',
        'calendar_event_status_display_name',
    ];

    // Relationships
    public function events(): HasMany
    {
        return $this->hasMany(CalendarEvent::class, 'calendar_event_status', 'calendar_event_status_id');
    }
}
