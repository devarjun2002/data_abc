<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyOfferSaleChainPosition extends Model
{
    protected $table = 'property_offer_sale_chain_position';
    protected $primaryKey = 'property_offer_sale_chain_position_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'property_offer_sale_chain_position_name',
        'property_offer_sale_chain_position_name2',
        'property_offer_sale_chain_position_sort',
    ];

    public function chains()
    {
        return $this->hasMany(PropertyOfferSaleChain::class, 'property_offer_sale_chain_position', 'property_offer_sale_chain_position_id');
    }
}
