<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarEventViewingType extends Model
{
    protected $table = 'calendar_event_viewing_type';
    protected $primaryKey = 'calendar_event_viewing_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'calendar_event_viewing_type_name'
    ];
}
