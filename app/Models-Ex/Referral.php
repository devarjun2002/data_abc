<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    protected $table = 'referral';
    protected $primaryKey = 'referral_id';
    public $timestamps = false;
    protected $fillable = [];

    // Add relationships here if you add foreign keys to referral status, type, employee, property, etc.
    public function type()
    {
        return $this->belongsTo(ReferralType::class, 'referral_type_id', 'referral_type_id');
    }
    public function status()
    {
        return $this->belongsTo(ReferralStatus::class, 'referral_status_id', 'referral_status_id');
    }
    public function salePurchase()
    {
        return $this->hasOne(ReferralSalePurchase::class, 'referral_id', 'referral_id');
    }
    public function payments()
    {
        return $this->hasMany(ReferralPayments::class, 'referral_id', 'referral_id');
    }
}
