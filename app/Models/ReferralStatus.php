<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferralStatus extends Model
{
    protected $table = 'referral_status';
    protected $primaryKey = 'referral_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'referral_status_name',
        'referral_status_sort'
    ];

    // Reverse Relationships
public function referrals()
    {
        return $this->hasMany(Referral::class, 'referral_status', 'referral_status_id');
    }
}