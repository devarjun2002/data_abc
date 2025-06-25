<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyOfferSaleLogStatus extends Model
{
    protected $table = 'property_offer_sale_log_status';
    protected $primaryKey = 'property_offer_sale_log_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'property_offer_sale_id',
        'property_offer_sale_status_old',
        'property_offer_sale_status_new',
        'property_offer_sale_updated_by',
        'property_offer_sale_date_updated',
    ];

    public function propertyOfferSale()
    {
        return $this->belongsTo(PropertyOfferSale::class, 'property_offer_sale_id', 'property_offer_sale_id');
    }
}
