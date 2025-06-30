<?php

namespace App\Models;
use App\Models\Employee;
use App\Models\Property;
use App\Models\PropertyOfferSale;
use App\Models\PropertyOfferSaleChainPosition;
use App\Models\PropertyOfferSaleChainStatus;

use Illuminate\Database\Eloquent\Model;

class PropertyOfferSaleChain extends Model
{
    protected $table = 'property_offer_sale_chain';
    protected $primaryKey = 'property_offer_sale_chain_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'property_offer_sale_chain_date_created' => 'datetime',
        'property_offer_sale_chain_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'property_offer_sale_chain_sort',
        'property_offer_sale_id',
        'property_offer_sale_chain_name',
        'property_offer_sale_chain_property_address',
        'property_offer_vendor_property_id',
        'property_offer_sale_chain_buyers_name',
        'property_offer_buyer_property_id',
        'property_offer_sale_chain_sale_price',
        'property_offer_sale_chain_selling',
        'property_offer_sale_chain_estate_agent_details',
        'property_offer_sale_chain_position',
        'property_offer_sale_chain_status',
        'property_offer_sale_chain_mortgage',
        'property_offer_sale_chain_survey',
        'property_offer_sale_chain_checked',
        'property_offer_sale_chain_notes',
        'property_offer_sale_chain_date_created',
        'property_offer_sale_chain_date_updated',
        'property_offer_sale_chain_created_by',
        'property_offer_sale_chain_updated_by',
    ];

    // Relationships --done
    public function saleOffer()
    {
        return $this->belongsTo(PropertyOfferSale::class, 'property_offer_sale_id', 'property_offer_sale_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'property_offer_sale_chain_created_by', 'employee_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'property_offer_sale_chain_updated_by', 'employee_id');
    }

    public function position()
    {
        return $this->belongsTo(PropertyOfferSaleChainPosition::class, 'property_offer_sale_chain_position', 'property_offer_sale_chain_position_id');
    }

    public function status()
    {
        return $this->belongsTo(PropertyOfferSaleChainStatus::class, 'property_offer_sale_chain_status', 'property_offer_sale_chain_status_id');
    }

    public function vendorProperty()
    {
        return $this->belongsTo(Property::class, 'property_offer_vendor_property_id', 'property_id');
    }

    public function buyerProperty()
    {
        return $this->belongsTo(Property::class, 'property_offer_buyer_property_id', 'property_id');
    }
}
