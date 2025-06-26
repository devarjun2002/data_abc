<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CalendarEventConfidence extends Model
{
    protected $table = 'calendar_event_confidence';
    protected $primaryKey = 'calendar_event_confidence_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'calendar_event_confidence_name',
        'calendar_event_confidence_sort'
    ];

    // Relationships
    public function events(): HasMany
    {
        return $this->hasMany(CalendarEvent::class, 'calendar_event_confidence', 'calendar_event_confidence_id');
    }

    public function viewings(): HasMany
    {
        return $this->hasMany(CalendarEventViewing::class, 'calendar_event_viewing_confidence_level', 'calendar_event_confidence_id');
    }
}
