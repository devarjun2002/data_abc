<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CalendarFiles extends Model
{
    protected $table = 'calendar_files';
    protected $primaryKey = 'calendar_files_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'calendar_event_id',
        'calendar_files_filename',
        'calendar_files_caption',
        'calendar_files_date_added',
        'calendar_files_sort',
    ];

    // Relationships
    public function event(): BelongsTo
    {
        return $this->belongsTo(CalendarEvent::class, 'calendar_event_id', 'calendar_event_id');
    }
} 