<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CalendarEventAttendeeType extends Model
{
    protected $table = 'calendar_event_attendee_type';
    protected $primaryKey = 'calendar_event_attendee_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'calendar_event_attendee_type_name',
        'calendar_event_attendee_type_survey_name'
    ];
}
