<?php

namespace App\Models;
use App\Models\Branch;
use App\Models\Capacity;
use App\Models\ContractType;
use App\Models\Country;
use App\Models\Directory;
use App\Models\Employee;
use App\Models\FeeType;
use App\Models\Landlord;
use App\Models\LettingService;
use App\Models\Property;
use App\Models\PropertyAccessArrangement;
use App\Models\PropertyAreaUnit;
use App\Models\PropertyCategory;
use App\Models\PropertyPossessionStatus;
use App\Models\PropertyPriceQualifier;
use App\Models\PropertyTenureType;
use App\Models\PropertyType;
use App\Models\Title;
use App\Models\ValuationAvailability;
use App\Models\ValuationCondition;
use App\Models\ValuationLeadSource;
use App\Models\ValuationLostReason;
use App\Models\ValuationReason;
use App\Models\ValuationStatus;
use App\Models\Vendor;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

class Valuation extends Model
{
    protected $table = 'valuation';
    protected $primaryKey = 'valuation_id';
    
    // Use custom timestamp fields
    const CREATED_AT = 'valuation_date_created';
    const UPDATED_AT = 'valuation_date_updated';

    protected $casts = [
        'valuation_date_created' => 'datetime',
        'valuation_date_updated' => 'datetime',
        'valuation_next_review_date' => 'datetime',
        'valuation_next_review_date_negotiator' => 'datetime',
        'valuation_next_review_date_lister' => 'datetime',
        'valuation_next_review_date_lister_notes' => 'datetime',
        'valuation_multi_agent_withdrawal_date' => 'datetime',
    ];

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
        'valuation_multi_agent_withdrawal_date',
        'valuation_instruct_epc',
        'valuation_photographer',
        'valuation_photographer_access',
        'valuation_minimum_contract_period',
        'valuation_letting_service',
        'valuation_lister',
        'valuation_instruction_override',
        'valuation_instruct_video',
        'valuation_recommendations',
        'valuation_date_created',
        'valuation_date_updated',
        'valuation_created_by',
        'valuation_updated_by',
        'valuation_title_2',
        'valuation_first_name_2',
        'valuation_surname_2',
        'valuation_email_2',
        'valuation_phone_home_2',
        'valuation_phone_work_2',
        'valuation_phone_mobile_2',
        'valuation_home_address_property_apartment_number_name_2',
        'valuation_home_address_property_number_name_2',
        'valuation_home_address_property_address_line_1_2',
        'valuation_home_address_property_address_line_2_2',
        'valuation_home_address_property_suburb_2',
        'valuation_home_address_property_town_city_2',
        'valuation_home_address_property_postcode_2',
        'valuation_home_address_property_country_2',
        'valuation_title_3',
        'valuation_first_name_3',
        'valuation_surname_3',
        'valuation_email_3',
        'valuation_phone_home_3',
        'valuation_phone_work_3',
        'valuation_phone_mobile_3',
        'valuation_home_address_property_apartment_number_name_3',
        'valuation_home_address_property_number_name_3',
        'valuation_home_address_property_address_line_1_3',
        'valuation_home_address_property_address_line_2_3',
        'valuation_home_address_property_suburb_3',
        'valuation_home_address_property_town_city_3',
        'valuation_home_address_property_postcode_3',
        'valuation_home_address_property_country_3',
        'valuation_title_4',
        'valuation_first_name_4',
        'valuation_surname_4',
        'valuation_email_4',
        'valuation_phone_home_4',
        'valuation_phone_work_4',
        'valuation_phone_mobile_4',
        'valuation_home_address_property_apartment_number_name_4',
        'valuation_home_address_property_number_name_4',
        'valuation_home_address_property_address_line_1_4',
        'valuation_home_address_property_address_line_2_4',
        'valuation_home_address_property_suburb_4',
        'valuation_home_address_property_town_city_4',
        'valuation_home_address_property_postcode_4',
        'valuation_home_address_property_country_4',
        'valuation_capacity_2',
        'valuation_capacity_3',
        'valuation_capacity_4',
        'valuation_referral_solicitor_notes',
        'valuation_referral_mortgage_notes',
        'valuation_tenant_contact_details',
        'valuation_premium_price_guide_link',
        'valuation_status_reason',
        'valuation_email_reminders',
        'valuation_total_amount_paid_employee',
        'valuation_property_living_space',
        'valuation_property_living_space_unit',
        'valuation_price_per_square_foot',
        'valuation_valuer_inherited',
        'valuation_ownership_period',
        'valuation_extended_loft_conversion_info',
        'valuation_major_improvements',
        'valuation_timescale_selling',
        'valuation_otm_details',
        'valuation_other_vals',
        'valuation_price_expectations',
        'valuation_parking_arrangements',
        'valuation_outdoor_space',
        'valuation_instruct_video_reason',
        'valuation_legal_owner_contact_details'
    ];

    // Relationships --done
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'valuation_branch');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'valuation_created_by');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'valuation_employee');
    }

    public function homeAddressCountry()
    {
        return $this->belongsTo(Country::class, 'valuation_home_address_property_country');
    }

    public function lister()
    {
        return $this->belongsTo(Employee::class, 'valuation_lister');
    }

    public function negotiator()
    {
        return $this->belongsTo(Employee::class, 'valuation_negotiator');
    }

    public function propertyCategory()
    {
        return $this->belongsTo(PropertyCategory::class, 'valuation_property_category');
    }

    public function propertyCountry()
    {
        return $this->belongsTo(Country::class, 'valuation_property_country');
    }

    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class, 'valuation_property_type');
    }

    public function title()
    {
        return $this->belongsTo(Title::class, 'valuation_title');
    }

    public function toLandlord()
    {
        return $this->belongsTo(Landlord::class, 'valuation_to_landlord');
    }

    public function toProperty()
    {
        return $this->belongsTo(Property::class, 'valuation_to_property');
    }

    public function toVendor()
    {
        return $this->belongsTo(Vendor::class, 'valuation_to_vendor');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'valuation_updated_by');
    }

    public function valuer()
    {
        return $this->belongsTo(Employee::class, 'valuation_employee');
    }

    public function capacity()
    {
        return $this->belongsTo(Capacity::class, 'valuation_capacity');
    }

    public function propertyAvailability()
    {
        return $this->belongsTo(ValuationAvailability::class, 'valuation_property_availability');
    }

    public function priceQualifier()
    {
        return $this->belongsTo(PropertyPriceQualifier::class, 'valuation_price_qualifier');
    }

    public function status()
    {
        return $this->belongsTo(ValuationStatus::class, 'valuation_status');
    }

    public function lostReason()
    {
        return $this->belongsTo(ValuationLostReason::class, 'valuation_lost_reason');
    }

    public function leadSource()
    {
        return $this->belongsTo(ValuationLeadSource::class, 'valuation_lead_source');
    }

    public function occupancy()
    {
        return $this->belongsTo(PropertyPossessionStatus::class, 'valuation_occupancy');
    }

    public function reason()
    {
        return $this->belongsTo(ValuationReason::class, 'valuation_reason');
    }

    public function lostTo()
    {
        return $this->belongsTo(Directory::class, 'valuation_lost_to');
    }

    public function multiAgent()
    {
        return $this->belongsTo(Directory::class, 'valuation_multi_agent');
    }

    public function photographer()
    {
        return $this->belongsTo(Directory::class, 'valuation_photographer');
    }

    public function lostSaleFeeType()
    {
        return $this->belongsTo(FeeType::class, 'valuation_lost_sale_fee_type');
    }

    public function saleFeeType()
    {
        return $this->belongsTo(FeeType::class, 'valuation_sale_fee_type');
    }

    public function tenantFindFeeType()
    {
        return $this->belongsTo(FeeType::class, 'valuation_tenant_find_fee_type');
    }

    public function tenantFindWithManagementFeeType()
    {
        return $this->belongsTo(FeeType::class, 'valuation_tenant_find_with_management_fee_type');
    }

    public function managementFeeType()
    {
        return $this->belongsTo(FeeType::class, 'valuation_management_fee_type');
    }

    public function tenureType()
    {
        return $this->belongsTo(PropertyTenureType::class, 'valuation_tenure_type');
    }

    public function condition()
    {
        return $this->belongsTo(ValuationCondition::class, 'valuation_condition');
    }

    public function contractType()
    {
        return $this->belongsTo(ContractType::class, 'valuation_contract_type');
    }

    public function photographerAccess()
    {
        return $this->belongsTo(PropertyAccessArrangement::class, 'valuation_photographer_access');
    }

    public function lettingService()
    {
        return $this->belongsTo(LettingService::class, 'valuation_letting_service');
    }

    public function livingSpaceUnit()
    {
        return $this->belongsTo(PropertyAreaUnit::class, 'valuation_property_living_space_unit');
    }
    // Reverse Relationships
public function valuationUpdateses()
    {
        return $this->hasMany(ValuationUpdates::class, 'valuation_updates_valuation_id', 'valuation_id');
    }
}