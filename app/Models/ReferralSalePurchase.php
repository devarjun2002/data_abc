<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
}
