<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
    // Reverse Relationships
public function calendarEventInspections()
    {
        return $this->hasMany(CalendarEventInspection::class, 'calendar_event_inspection_gardens', 'calendar_event_inspection_cleanliness_id');
    }
}