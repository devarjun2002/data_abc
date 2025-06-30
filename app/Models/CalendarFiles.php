<?php

namespace App\Models;
use App\Models\CalendarEvent;

use Illuminate\Database\Eloquent\Model;

class CalendarFiles extends Model
{
    protected $table = 'calendar_files';
    protected $primaryKey = 'calendar_files_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'calendar_files_date_added' => 'datetime',
    ];

    protected $fillable = [
        'calendar_event_id',
        'calendar_files_filename',
        'calendar_files_caption',
        'calendar_files_date_added',
        'calendar_files_sort',
    ];

    // Relationships --done
    public function event()
    {
        return $this->belongsTo(CalendarEvent::class, 'calendar_event_id', 'calendar_event_id');
    }
} 