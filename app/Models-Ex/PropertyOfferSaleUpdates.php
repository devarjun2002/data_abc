<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyOfferSaleUpdates extends Model
{
    protected $table = 'property_offer_sale_updates';
    protected $primaryKey = 'property_offer_sale_updates_id';
    public $timestamps = false;
    protected $fillable = [];

    // Add relationships here if you add foreign keys to property, offer, sale, etc.

    public function propertyOfferSale()
    {
        return $this->belongsTo(PropertyOfferSale::class, 'property_offer_sale_updates_property_offer_sale_id', 'property_offer_sale_id');
    }
}
