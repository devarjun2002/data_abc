<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarEventInspectionType extends Model
{
    protected $table = 'calendar_event_inspection_type';
    protected $primaryKey = 'calendar_event_inspection_type_id';
    public $timestamps = false;
    protected $guarded = [];

    public function events()
    {
        return $this->hasMany(CalendarEvent::class, 'calendar_event_inspection_type', 'calendar_event_inspection_type_id');
    }
}
