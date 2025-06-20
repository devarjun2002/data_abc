<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferralStatus extends Model
{
    protected $table = 'referral_status';
    protected $primaryKey = 'referral_status_id';
    public $timestamps = false;
    protected $fillable = [];

    public function referrals()
    {
        return $this->hasMany(Referral::class, 'referral_status_id', 'referral_status_id');
    }
}
