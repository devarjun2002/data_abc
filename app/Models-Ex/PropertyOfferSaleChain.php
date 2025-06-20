<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyOfferSaleChain extends Model
{
    protected $table = 'property_offer_sale_chain';
    protected $primaryKey = 'property_offer_sale_chain_id';
    public $timestamps = false;
    protected $fillable = [];

    public function propertyOfferSale()
    {
        return $this->belongsTo(PropertyOfferSale::class, 'property_offer_sale_id', 'property_offer_sale_id');
    }
    public function position()
    {
        return $this->belongsTo(PropertyOfferSaleChainPosition::class, 'property_offer_sale_chain_position', 'property_offer_sale_chain_position_id');
    }
    public function status()
    {
        return $this->belongsTo(PropertyOfferSaleChainStatus::class, 'property_offer_sale_chain_status', 'property_offer_sale_chain_status_id');
    }
}
