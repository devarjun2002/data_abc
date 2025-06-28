<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationDeclineReason extends Model
{
    protected $table = 'application_decline_reason';
    protected $primaryKey = 'application_decline_reason_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'application_decline_reason_name',
    ];
}
