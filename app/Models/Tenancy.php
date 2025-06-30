<?php

namespace App\Models;
use App\Models\Branch;
use App\Models\Employee;
use App\Models\FeeType;
use App\Models\FixedTermUnit;
use App\Models\InspectionFrequency;
use App\Models\LettingService;
use App\Models\MoveOutReason;
use App\Models\PaymentMethod;
use App\Models\Property;
use App\Models\PropertyCategory;
use App\Models\PropertyRoomLetting;
use App\Models\RentAgreement;
use App\Models\Tenancy;
use App\Models\TenancyPropertyPart;
use App\Models\TenancyRenewalStatus;
use App\Models\TenancyRentFrequency;
use App\Models\TenancyStatus;
use App\Models\VatRate;

use Illuminate\Database\Eloquent\Model;

class Tenancy extends Model
{
    protected $table = 'tenancy';
    protected $primaryKey = 'tenancy_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $casts = [
        'tenancy_agreement_date' => 'datetime',
        'tenancy_start_date' => 'datetime',
        'tenancy_fixed_term_end_date' => 'datetime',
        'tenancy_tnts_vacation_date' => 'datetime',
        'tenancy_official_end_date' => 'datetime',
        'tenancy_notice_expiry_date' => 'datetime',
        'tenancy_management_takeover_date' => 'datetime',
        'tenancy_rlei_opt_out_date' => 'datetime',
        'tenancy_last_inspection_date' => 'datetime',
        'tenancy_last_inspection_date_backup' => 'datetime',
        'tenancy_accounts_next_review_date' => 'datetime',
        'tenancy_date_created' => 'datetime',
        'tenancy_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'tenancy_token',
        'tenancy_type',
        'tenancy_property',
        'tenancy_furnished',
        'tenancy_children',
        'tenancy_pets',
        'tenancy_smoking',
        'tenancy_property_part',
        'tenancy_property_part_room',
        'tenancy_property_part_description',
        'tenancy_shared_facilities',
        'tenancy_shared_facilities_description',
        'tenancy_agreement_date',
        'tenancy_start_date',
        'tenancy_fixed_term',
        'tenancy_fixed_term_unit',
        'tenancy_fixed_term_end_date',
        'tenancy_rent_amount',
        'tenancy_rent_frequency',
        'tenancy_rent_payable',
        'tenancy_rent_agreement',
        'tenancy_rent_frequency_schedule',
        'tenancy_rent_payment_method',
        'tenancy_council_pay_rent',
        'tenancy_rent_vat_rate',
        'tenancy_service_charge_amount',
        'tenancy_service_charge_frequency',
        'tenancy_service_charge_payable',
        'tenancy_service_charge_agreement',
        'tenancy_service_charge_frequency_schedule',
        'tenancy_service_charge_payment_method',
        'tenancy_service_charge_vat_rate',
        'tenancy_insurance_amount',
        'tenancy_insurance_frequency',
        'tenancy_insurance_payable',
        'tenancy_insurance_agreement',
        'tenancy_insurance_frequency_schedule',
        'tenancy_insurance_payment_method',
        'tenancy_insurance_vat_rate',
        'tenancy_notes',
        'tenancy_agent_branch',
        'tenancy_agent_employee',
        'tenancy_letting_service',
        'tenancy_tenant_find_fee',
        'tenancy_tenant_find_fee_type',
        'tenancy_management_fee',
        'tenancy_management_fee_type',
        'tenancy_gas',
        'tenancy_electricity',
        'tenancy_water',
        'tenancy_oil',
        'tenancy_telephone',
        'tenancy_broadband',
        'tenancy_tv_licence',
        'tenancy_sat_cable_tv',
        'tenancy_council_tax',
        'tenancy_deposit_required',
        'tenancy_deposit_amount',
        'tenancy_status',
        'tenancy_renewal_status',
        'tenancy_renewal_notes',
        'tenancy_renewal_employee',
        'tenancy_is_renewal_id',
        'tenancy_is_renewal',
        'tenancy_tnts_vacation_date',
        'tenancy_official_end_date',
        'tenancy_move_out_reason',
        'tenancy_move_out_notes',
        'tenancy_tenant_find_with_management_fee',
        'tenancy_tenant_find_with_management_fee_type',
        'tenancy_overdue_tc_reminders',
        'tenancy_student',
        'tenancy_inspection_frequency',
        'tenancy_last_inspection_date',
        'tenancy_last_inspection_date_backup',
        'tenancy_move_out_employee',
        'tenancy_inventory_ingoing_link',
        'tenancy_inventory_outgoing_link',
        'tenancy_notice_expiry_date',
        'tenancy_accounts_next_review_date',
        'tenancy_viewings_permitted',
        'tenancy_date_created',
        'tenancy_date_updated',
        'tenancy_created_by',
        'tenancy_updated_by',
        'tenancy_management_takeover',
        'tenancy_management_takeover_date',
        'tenancy_management_takeover_notes',
        'tenancy_periodic_rent_increase_negotiator',
        'tenancy_rlei_opt_out_date'
    ];

    // Relationships --done
    public function agentBranch()
    {
        return $this->belongsTo(Branch::class, 'tenancy_agent_branch', 'branch_id');
    }

    public function agentEmployee()
    {
        return $this->belongsTo(Employee::class, 'tenancy_agent_employee', 'employee_id');
    }

    public function rentIncreaseNegotiator()
    {
        return $this->belongsTo(Employee::class, 'tenancy_periodic_rent_increase_negotiator', 'employee_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'tenancy_created_by', 'employee_id');
    }

    public function moveOutEmployee()
    {
        return $this->belongsTo(Employee::class, 'tenancy_move_out_employee', 'employee_id');
    }

    public function renewalEmployee()
    {
        return $this->belongsTo(Employee::class, 'tenancy_renewal_employee', 'employee_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'tenancy_updated_by', 'employee_id');
    }

    public function property()
    {
        return $this->belongsTo(Property::class, 'tenancy_property', 'property_id');
    }

    public function propertyPartRoom()
    {
        return $this->belongsTo(PropertyRoomLetting::class, 'tenancy_property_part_room', 'property_room_letting_id');
    }

    public function fixedTermUnit()
    {
        return $this->belongsTo(FixedTermUnit::class, 'tenancy_fixed_term_unit', 'tenancy_fixed_term_unit_id');
    }

    public function type()
    {
        return $this->belongsTo(PropertyCategory::class, 'tenancy_type', 'property_category_id');
    }

    public function lettingService()
    {
        return $this->belongsTo(LettingService::class, 'tenancy_letting_service', 'letting_service_id');
    }

    public function rentFrequency()
    {
        return $this->belongsTo(TenancyRentFrequency::class, 'tenancy_rent_frequency', 'tenancy_rent_frequency_id');
    }

    public function rentPayable()
    {
        return $this->belongsTo(TenancyRentFrequency::class, 'tenancy_rent_payable', 'tenancy_rent_frequency_id');
    }

    public function serviceChargeFrequency()
    {
        return $this->belongsTo(TenancyRentFrequency::class, 'tenancy_service_charge_frequency', 'tenancy_rent_frequency_id');
    }

    public function insuranceFrequency()
    {
        return $this->belongsTo(TenancyRentFrequency::class, 'tenancy_insurance_frequency', 'tenancy_rent_frequency_id');
    }

    public function serviceChargePayable()
    {
        return $this->belongsTo(TenancyRentFrequency::class, 'tenancy_service_charge_payable', 'tenancy_rent_frequency_id');
    }

    public function insurancePayable()
    {
        return $this->belongsTo(TenancyRentFrequency::class, 'tenancy_insurance_payable', 'tenancy_rent_frequency_id');
    }

    public function rentVatRate()
    {
        return $this->belongsTo(VatRate::class, 'tenancy_rent_vat_rate', 'vat_rate_id');
    }

    public function insuranceVatRate()
    {
        return $this->belongsTo(VatRate::class, 'tenancy_insurance_vat_rate', 'vat_rate_id');
    }

    public function serviceChargeVatRate()
    {
        return $this->belongsTo(VatRate::class, 'tenancy_service_charge_vat_rate', 'vat_rate_id');
    }

    public function rentAgreement()
    {
        return $this->belongsTo(RentAgreement::class, 'tenancy_rent_agreement', 'tenancy_rent_agreement_id');
    }

    public function serviceChargeAgreement()
    {
        return $this->belongsTo(RentAgreement::class, 'tenancy_service_charge_agreement', 'tenancy_rent_agreement_id');
    }

    public function insuranceAgreement()
    {
        return $this->belongsTo(RentAgreement::class, 'tenancy_insurance_agreement', 'tenancy_rent_agreement_id');
    }

    public function rentPaymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'tenancy_rent_payment_method', 'tenancy_payment_method_id');
    }

    public function serviceChargePaymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'tenancy_service_charge_payment_method', 'tenancy_payment_method_id');
    }

    public function insurancePaymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'tenancy_insurance_payment_method', 'tenancy_payment_method_id');
    }

    public function tenantFindFeeType()
    {
        return $this->belongsTo(FeeType::class, 'tenancy_tenant_find_fee_type', 'fee_type_id');
    }

    public function managementFeeType()
    {
        return $this->belongsTo(FeeType::class, 'tenancy_management_fee_type', 'fee_type_id');
    }

    public function tenantFindWithManagementFeeType()
    {
        return $this->belongsTo(FeeType::class, 'tenancy_tenant_find_with_management_fee_type', 'fee_type_id');
    }

    public function status()
    {
        return $this->belongsTo(TenancyStatus::class, 'tenancy_status', 'tenancy_status_id');
    }

    public function renewalStatus()
    {
        return $this->belongsTo(TenancyRenewalStatus::class, 'tenancy_renewal_status', 'tenancy_renewal_status_id');
    }

    public function isRenewalOf()
    {
        return $this->belongsTo(Tenancy::class, 'tenancy_id', 'tenancy_id');
    }

    public function moveOutReason()
    {
        return $this->belongsTo(MoveOutReason::class, 'tenancy_move_out_reason', 'tenancy_move_out_reason_id');
    }

    public function inspectionFrequency()
    {
        return $this->belongsTo(InspectionFrequency::class, 'tenancy_inspection_frequency', 'tenancy_inspection_frequency_id');
    }

    public function propertyPart()
    {
        return $this->belongsTo(TenancyPropertyPart::class, 'tenancy_property_part', 'tenancy_property_part_id');
    }
    // Reverse Relationships
public function tenancyUpdateses()
    {
        return $this->hasMany(TenancyUpdates::class, 'tenancy_updates_tenancy_id', 'tenancy_id');
    }
}