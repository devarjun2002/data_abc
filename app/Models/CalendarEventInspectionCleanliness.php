<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CalendarEventInspectionCleanliness extends Model
{
    protected $table = 'calendar_event_inspection_cleanliness';
    protected $primaryKey = 'calendar_event_inspection_cleanliness_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'calendar_event_inspection_cleanliness_name'
    ];

    // Relationships
    public function inspections(): HasMany
    {
        return $this->hasMany(CalendarEventInspection::class, 'calendar_event_inspection_cleanliness', 'calendar_event_inspection_cleanliness_id');
    }

    public function gardensInspections(): HasMany
    {
        return $this->hasMany(CalendarEventInspection::class, 'calendar_event_inspection_gardens', 'calendar_event_inspection_cleanliness_id');
    }

    public function petsInspections(): HasMany
    {
        return $this->hasMany(CalendarEventInspection::class, 'calendar_event_inspection_pets', 'calendar_event_inspection_cleanliness_id');
    }

    public function smokingInspections(): HasMany
    {
        return $this->hasMany(CalendarEventInspection::class, 'calendar_event_inspection_smoking', 'calendar_event_inspection_cleanliness_id');
    }

    public function additionalOccupantsInspections(): HasMany
    {
        return $this->hasMany(CalendarEventInspection::class, 'calendar_event_inspection_additional_occupants', 'calendar_event_inspection_cleanliness_id');
    }

    public function mouldInspections(): HasMany
    {
        return $this->hasMany(CalendarEventInspection::class, 'calendar_event_inspection_mould', 'calendar_event_inspection_cleanliness_id');
    }
}
