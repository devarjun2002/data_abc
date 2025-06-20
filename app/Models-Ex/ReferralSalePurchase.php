<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferralSalePurchase extends Model
{
    protected $table = 'referral_sale_purchase';
    protected $primaryKey = 'referral_sale_purchase_id';
    public $timestamps = false;
    protected $fillable = [];

    public function referral()
    {
        return $this->belongsTo(Referral::class, 'referral_id', 'referral_id');
    }
}
