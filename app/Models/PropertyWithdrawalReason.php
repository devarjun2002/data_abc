<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyWithdrawalReason extends Model
{
    protected $table = 'property_withdrawal_reason';
    protected $primaryKey = 'property_withdrawal_reason_id';
    public $timestamps = false;
    protected $guarded = [];

    public function properties()
    {
        return $this->hasMany(Property::class, 'property_withdrawal_reason_id', 'property_withdrawal_reason_id');
    }
}
