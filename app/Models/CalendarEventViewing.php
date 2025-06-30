<?php

namespace App\Models;
use App\Models\CalendarEvent;
use App\Models\CalendarEventConfidence;
use App\Models\CalendarEventViewingType;
use App\Models\Employee;

use Illuminate\Database\Eloquent\Model;

class CalendarEventViewing extends Model
{
    protected $table = 'calendar_event_viewing';
    protected $primaryKey = 'calendar_event_viewing_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'calendar_event_viewing_date_created' => 'datetime',
        'calendar_event_viewing_date_updated' => 'datetime',
        'calendar_event_viewing_next_review_date' => 'datetime',
    ];

    protected $fillable = [
        'calendar_event_viewing_calendar_event_id',
        'calendar_event_viewing_pros',
        'calendar_event_viewing_cons',
        'calendar_event_viewing_ptp',
        'calendar_event_viewing_confidence_level',
        'calendar_event_viewing_public_notes',
        'calendar_event_viewing_private_notes',
        'calendar_event_viewing_type',
        'calendar_event_viewings_referral_solicitor',
        'calendar_event_viewings_referral_mortgage',
        'calendar_event_viewings_referral_valuation',
        'calendar_event_viewing_next_review_date',
        'calendar_event_viewing_date_created',
        'calendar_event_viewing_date_updated',
        'calendar_event_viewing_created_by',
        'calendar_event_viewing_updated_by'
    ];

    // Relationships --done
    public function event()
    {
        return $this->belongsTo(CalendarEvent::class, 'calendar_event_viewing_calendar_event_id', 'calendar_event_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'calendar_event_viewing_created_by', 'employee_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'calendar_event_viewing_updated_by', 'employee_id');
    }

    public function confidenceLevel()
    {
        return $this->belongsTo(CalendarEventConfidence::class, 'calendar_event_viewing_confidence_level', 'calendar_event_confidence_id');
    }

    public function type()
    {
        return $this->belongsTo(CalendarEventViewingType::class, 'calendar_event_viewing_type', 'calendar_event_viewing_type_id');
    }
}
