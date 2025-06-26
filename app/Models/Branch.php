<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Branch extends Model
{
    protected $table = 'branch';
    protected $primaryKey = 'branch_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];
    
    protected $fillable = [
        'branch_company_id',
        'branch_company_name',
        'branch_name',
        'branch_sole_sale_fee',
        'branch_multi_sale_fee',
        'branch_sole_sale_fee_type',
        'branch_multi_sale_fee_type',
        'branch_sole_sale_fee_min_no_viewings',
        'branch_sole_sale_fee_min_with_viewings',
        'branch_multi_sale_fee_min_no_viewings',
        'branch_multi_sale_fee_min_with_viewings',
        'branch_tenant_find_fee',
        'branch_tenant_find_fee_min',
        'branch_tenant_find_with_management_fee',
        'branch_tenant_find_with_management_fee_min_commercial',
        'branch_management_fee',
        'branch_management_fee_commercial',
        'branch_tenant_find_fee_type',
        'branch_tenant_find_with_management_fee_type',
        'branch_management_fee_type',
        'branch_tenant_fees',
        'branch_tenant_fees_commercial',
        'branch_sale_phone',
        'branch_letting_phone',
        'branch_sale_fax',
        'branch_letting_fax',
        'branch_sale_email',
        'branch_sale_email_commercial',
        'branch_letting_email',
        'branch_letting_email_commercial',
        'branch_accounts_email',
        'branch_works_email',
        'branch_property_number_name',
        'branch_address_line_1',
        'branch_address_line_2',
        'branch_suburb',
        'branch_town_city',
        'branch_postcode',
        'branch_country',
        'branch_reminder_letter_fee',
        'branch_missed_payment_fee',
        'branch_bank_name_current',
        'branch_bank_sort_code_current',
        'branch_bank_account_number_current',
        'branch_bank_iban_current',
        'branch_bank_bic_swift_current',
        'branch_bank_account_name_current',
        'branch_bank_name_client',
        'branch_bank_sort_code_client',
        'branch_bank_account_number_client',
        'branch_bank_iban_client',
        'branch_bank_bic_swift_client',
        'branch_bank_account_name_client',
        'branch_bank_bacs_file_originator_name',
        'branch_cheque_payable_to',
        'branch_latitude',
        'branch_longitude',
        'branch_xmas_opening_description',
        'branch_easter_opening_description',
        'branch_zpg_ref',
        'branch_inspection_frequency',
        'branch_mileage_payment',
        'branch_accompanied_viewing_schedule',
        'branch_redress_scheme',
        'branch_cmp_provider',
        'branch_cmp_provider_accounting_rules',
        'branch_hmrc_nrl_ref',
        'branch_deposit_protection_service_id',
        'branch_deposit_protection_service_bank_account_name',
        'branch_deposit_protection_service_bank_account_number',
        'branch_deposit_protection_service_bank_sort_code',
        'branch_mydeposits_id',
        'branch_ip_address'
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'branch_company_id', 'company_id');
    }

    public function bankCurrent(): BelongsTo
    {
        return $this->belongsTo(Bank::class, 'branch_bank_name_current', 'bank_id');
    }

    public function bankClient(): BelongsTo
    {
        return $this->belongsTo(Bank::class, 'branch_bank_name_client', 'bank_id');
    }

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'employee_branch_id', 'branch_id');
    }

    public function landlords(): HasMany
    {
        return $this->hasMany(Landlord::class, 'landlord_branch_id', 'branch_id');
    }

    public function properties(): HasMany
    {
        return $this->hasMany(Property::class, 'property_branch_id', 'branch_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'branch_created_by', 'employee_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'branch_updated_by', 'employee_id');
    }
}
