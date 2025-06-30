<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyOfferSaleType extends Model
{
    use HasFactory;

    protected $table = 'property_offer_sale_type';
    protected $primaryKey = 'property_offer_sale_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_offer_sale_type_name',
        'property_offer_sale_type_description',
    ];
    // Reverse Relationships
public function propertyOfferSales()
    {
        return $this->hasMany(PropertyOfferSale::class, 'property_offer_sale_type', 'property_offer_sale_type_id');
    }
}