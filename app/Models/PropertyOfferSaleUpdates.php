<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyOfferSaleUpdates extends Model
{
    protected $table = 'property_offer_sale_updates';
    protected $primaryKey = 'property_offer_sale_updates_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'property_offer_sale_updates_date_created' => 'datetime',
    ];

    protected $fillable = [
        'property_offer_sale_updates_property_offer_sale_id',
        'property_offer_sale_updates_public_notes',
        'property_offer_sale_updates_private_notes',
        'property_offer_sale_updates_notify_vendors',
        'property_offer_sale_updates_notify_applicants',
        'property_offer_sale_updates_notify_sales_negotiation',
        'property_offer_sale_updates_notify_sales_progression',
        'property_offer_sale_updates_date_created',
        'property_offer_sale_updates_created_by',
    ];

    // Relationships --done
    public function offerSale()
    {
        return $this->belongsTo(PropertyOfferSale::class, 'property_offer_sale_updates_property_offer_sale_id', 'property_offer_sale_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'property_offer_sale_updates_created_by', 'employee_id');
    }
}
