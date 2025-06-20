<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarFiles extends Model
{
    protected $table = 'calendar_files';
    protected $primaryKey = 'calendar_files_id';
    public $timestamps = false;
    protected $fillable = [];

    // Relationships
    public function event()
    {
        return $this->belongsTo(CalendarEvent::class, 'calendar_event_id', 'calendar_event_id');
    }

    // For future: add relationships to file types, attachments, or users if needed
}
