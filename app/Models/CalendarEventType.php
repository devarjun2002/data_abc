<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarEventType extends Model
{
    protected $table = 'calendar_event_type';
    protected $primaryKey = 'calendar_event_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'calendar_event_type_name',
        'calendar_event_type_sort'
    ];

    // Relationships --done
    public function events()
    {
        return $this->hasMany(CalendarEvent::class, 'calendar_event_type', 'calendar_event_type_id');
    }
    // Reverse Relationships
public function certificates()
    {
        return $this->hasMany(Certificate::class, 'certificate_type', 'calendar_event_type_id');
    }
}