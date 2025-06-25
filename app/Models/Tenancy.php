<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenancy extends Model
{
    protected $table = 'tenancy';
    protected $primaryKey = 'tenancy_id';
    public $timestamps = false;
    protected $guarded = [];
    
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

    public function property()
    {
        return $this->belongsTo(Property::class, 'tenancy_property', 'property_id');
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class, 'tenancy_agent_branch', 'agent_branch_id');
    }
}
