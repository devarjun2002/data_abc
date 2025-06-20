<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferralPayments extends Model
{
    protected $table = 'referral_payments';
    protected $primaryKey = 'referral_payments_id';
    public $timestamps = false;
    protected $fillable = [];

    public function referral()
    {
        return $this->belongsTo(Referral::class, 'referral_id', 'referral_id');
    }
}
