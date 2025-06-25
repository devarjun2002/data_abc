<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ReferralPaymentType extends Model
{
    protected $table = 'referral_payment_type';
    protected $primaryKey = 'referral_payment_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'referral_payment_type_name',    
    ];
}
