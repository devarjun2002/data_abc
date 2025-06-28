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
}
