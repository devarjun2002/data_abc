<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyOfferSaleChainStatus extends Model
{
    protected $table = 'property_offer_sale_chain_status';
    protected $primaryKey = 'property_offer_sale_chain_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_offer_sale_chain_status_name',
        'property_offer_sale_chain_status_sort',
    ];

    // Relationships --done
    public function chains()
    {
        return $this->hasMany(PropertyOfferSaleChain::class, 'property_offer_sale_chain_status', 'property_offer_sale_chain_status_id');
    }
}
