<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyWithdrawalReason extends Model
{
    protected $table = 'property_withdrawal_reason';
    protected $primaryKey = 'property_withdrawal_reason_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_withdrawal_reason_name',
    ];
}
