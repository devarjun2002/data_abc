<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyOfferSaleChainPosition extends Model
{
    protected $table = 'property_offer_sale_chain_position';
    protected $primaryKey = 'property_offer_sale_chain_position_id';
    public $timestamps = false;
    protected $fillable = [];

    public function chains()
    {
        return $this->hasMany(PropertyOfferSaleChain::class, 'property_offer_sale_chain_position', 'property_offer_sale_chain_position_id');
    }
}
