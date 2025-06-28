<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValuationMeetingWith extends Model
{
    protected $table = 'valuation_meeting_with';
    protected $primaryKey = 'valuation_meeting_with_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'valuation_meeting_with_name'
    ];
}
