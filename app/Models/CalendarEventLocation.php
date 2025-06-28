<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CalendarEventLocation extends Model
{
    protected $table = 'calendar_event_location';
    protected $primaryKey = 'calendar_event_location_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'calendar_event_location_name',
    ];

    // Relationships --done
    public function events(): HasMany
    {
        return $this->hasMany(CalendarEvent::class, 'calendar_event_location_id', 'calendar_event_location_id');
    }
}
