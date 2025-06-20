<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarEventTimeOffPay extends Model
{
    protected $table = 'calendar_event_time_off_pay';
    protected $primaryKey = 'calendar_event_time_off_pay_id';
    public $timestamps = false;
    protected $guarded = [];

    public function events()
    {
        return $this->hasMany(CalendarEvent::class, 'calendar_event_time_off_pay', 'calendar_event_time_off_pay_id');
    }
}
