<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferralSalePurchase extends Model
{
    protected $table = 'referral_sale_purchase';
    protected $primaryKey = 'referral_sale_purchase_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'referral_sale_purchase_name',
        'referral_sale_purchase_sort'
    ];
    // Reverse Relationships
public function referrals()
    {
        return $this->hasMany(Referral::class, 'referral_sale_purchase', 'referral_sale_purchase_id');
    }
}