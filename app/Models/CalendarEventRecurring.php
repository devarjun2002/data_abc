<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CalendarEventRecurring extends Model
{
    protected $table = 'calendar_event_recurring';
    protected $primaryKey = 'calendar_event_recurring_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'calendar_event_recurring_start_date' => 'datetime',
        'calendar_event_recurring_next_processing_date' => 'datetime',
    ];

    protected $fillable = [
        'calendar_event_recurring_calendar_event_id',
        'calendar_event_recurring_frequency',
        'calendar_event_recurring_frequency_unit',
        'calendar_event_recurring_start_date',
        'calendar_event_recurring_next_processing_date',
        'calendar_event_recurring_suspended'
    ];

    // Relationships --done
    public function originalEvent(): BelongsTo
    {
        return $this->belongsTo(CalendarEvent::class, 'calendar_event_recurring_calendar_event_id', 'calendar_event_id');
    }

    public function events(): HasMany
    {
        return $this->hasMany(CalendarEvent::class, 'calendar_event_recurring_id', 'calendar_event_recurring_id');
    }

    public function frequencyUnit(): BelongsTo
    {
        return $this->belongsTo(AccountsRecurringFrequencyUnit::class, 'calendar_event_recurring_frequency_unit', 'accounts_recurring_frequency_unit_id');
    }
}
