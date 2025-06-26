<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CalendarEventUpdates extends Model
{
    protected $table = 'calendar_event_updates';
    protected $primaryKey = 'calendar_event_updates_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'calendar_event_updates_date_created' => 'datetime',
    ];

    protected $fillable = [
        'calendar_event_updates_calendar_event_id',
        'calendar_event_updates_private_notes',
        'calendar_event_updates_date_created',
        'calendar_event_updates_created_by',
    ];

    // Relationships
    public function event(): BelongsTo
    {
        return $this->belongsTo(CalendarEvent::class, 'calendar_event_updates_calendar_event_id', 'calendar_event_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'calendar_event_updates_created_by', 'employee_id');
    }
}
