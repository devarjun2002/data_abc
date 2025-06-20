<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Valuation extends Model
{
    protected $table = 'valuation';
    protected $primaryKey = 'valuation_id';
    public $timestamps = false;

    protected $fillable = [
        'valuation_title',
        'valuation_first_name',
        'valuation_surname',
        'valuation_capacity',
        'valuation_email',
        'valuation_phone_home',
        'valuation_phone_work',
        'valuation_phone_mobile',
        'valuation_home_address_property_apartment_number_name',
        'valuation_home_address_property_number_name',
        'valuation_home_address_property_address_line_1',
        'valuation_home_address_property_address_line_2',
        'valuation_home_address_property_suburb',
        'valuation_home_address_property_town_city',
        'valuation_home_address_property_postcode',
        'valuation_home_address_property_country',
        'valuation_property_apartment_number_name',
        'valuation_property_number_name',
        'valuation_property_address_line_1',
        'valuation_property_address_line_2',
        'valuation_property_suburb',
        'valuation_property_town_city',
        'valuation_property_postcode',
        'valuation_property_country',
        'valuation_property_availability',
        'valuation_property_category',
        'valuation_property_type',
        'valuation_property_no_bedrooms',
        'valuation_property_no_bathrooms',
        'valuation_property_no_receptions',
        'valuation_property_price_from',
        'valuation_property_price_to',
        'valuation_property_price_asking',
        'valuation_price_qualifier',
        'valuation_branch',
        'valuation_employee',
        'valuation_negotiator',
        'valuation_status',
        'valuation_lost_reason',
        'valuation_notes',
        'valuation_notes_private',
        'valuation_value_notes',
        'valuation_next_review_date',
        'valuation_next_review_date_negotiator',
        'valuation_next_review_date_lister',
        'valuation_next_review_date_lister_notes',
        'valuation_lead_source',
        'valuation_lead_source_notes',
        'valuation_occupancy',
        'valuation_reason',
        'valuation_lost_to',
        'valuation_lost_sale_fee',
        'valuation_lost_sale_fee_type',
        'valuation_property_price_marketed',
        'valuation_price_qualifier_marketed',
        'valuation_tenure_type',
        'valuation_sale_fee',
        'valuation_sale_fee_type',
        'valuation_tenant_find_fee',
        'valuation_tenant_find_fee_type',
        'valuation_tenant_find_with_management_fee',
        'valuation_tenant_find_with_management_fee_type',
        'valuation_management_fee',
        'valuation_management_fee_type',
        'valuation_to_landlord',
        'valuation_to_vendor',
        'valuation_to_property',
        'valuation_condition',
        'valuation_contract_type',
        'valuation_multi_agent',
        'valuation_multi_agent_notes',
        'valuation_multi_agent_withdrawal_date'
    ];

    protected $dates = [
        'valuation_next_review_date',
        'valuation_next_review_date_negotiator',
        'valuation_next_review_date_lister',
        'valuation_multi_agent_withdrawal_date'
    ];

    // Relationships
    public function title()
    {
        return $this->belongsTo(Title::class, 'valuation_title', 'title_id');
    }

    public function capacity()
    {
        return $this->belongsTo(Capacity::class, 'valuation_capacity', 'capacity_id');
    }

    public function homeCountry()
    {
        return $this->belongsTo(Country::class, 'valuation_home_address_property_country', 'country_id');
    }

    public function propertyCountry()
    {
        return $this->belongsTo(Country::class, 'valuation_property_country', 'country_id');
    }

    public function availability()
    {
        return $this->belongsTo(ValuationAvailability::class, 'valuation_property_availability', 'valuation_availability_id');
    }

    public function propertyCategory()
    {
        return $this->belongsTo(PropertyCategory::class, 'valuation_property_category', 'property_category_id');
    }

    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class, 'valuation_property_type', 'property_type_id');
    }

    public function priceQualifier()
    {
        return $this->belongsTo(PropertyPriceQualifier::class, 'valuation_price_qualifier', 'price_qualifier_id');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'valuation_branch', 'branch_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'valuation_employee', 'employee_id');
    }

    public function negotiator()
    {
        return $this->belongsTo(Employee::class, 'valuation_negotiator', 'employee_id');
    }

    public function status()
    {
        return $this->belongsTo(ValuationStatus::class, 'valuation_status', 'valuation_status_id');
    }

    public function lostReason()
    {
        return $this->belongsTo(ValuationLostReason::class, 'valuation_lost_reason', 'valuation_lost_reason_id');
    }

    public function leadSource()
    {
        return $this->belongsTo(ValuationLeadSource::class, 'valuation_lead_source', 'valuation_lead_source_id');
    }

    public function reason()
    {
        return $this->belongsTo(ValuationReason::class, 'valuation_reason', 'valuation_reason_id');
    }

    public function tenureType()
    {
        return $this->belongsTo(PropertyTenureType::class, 'valuation_tenure_type', 'property_tenure_type_id');
    }

    public function condition()
    {
        return $this->belongsTo(ValuationCondition::class, 'valuation_condition', 'valuation_condition_id');
    }

    public function contractType()
    {
        return $this->belongsTo(ContractType::class, 'valuation_contract_type', 'contract_type_id');
    }

    public function toLandlord()
    {
        return $this->belongsTo(Landlord::class, 'valuation_to_landlord', 'landlord_id');
    }

    public function toVendor()
    {
        return $this->belongsTo(Vendor::class, 'valuation_to_vendor', 'vendor_id');
    }
}
