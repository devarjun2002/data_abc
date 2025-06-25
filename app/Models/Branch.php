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
    
    protected $fillable = [
        'branch_company_id',
        'branch_name',
        'branch_sole_sale_fee',
        'branch_multi_sale_fee',
        'branch_tenant_find_fee',
        'branch_management_fee',
        'branch_sale_phone',
        'branch_letting_phone',
        'branch_sale_email',
        'branch_letting_email',
        'branch_address_line_1',
        'branch_address_line_2',
        'branch_suburb',
        'branch_town_city',
        'branch_postcode',
        'branch_country',
        'branch_latitude',
        'branch_longitude'
    ];

    // Relationships
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'branch_company_id', 'company_id');
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'branch_country', 'country_id');
    }

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'employee_branch_id', 'branch_id');
    }

    public function properties(): HasMany
    {
        return $this->hasMany(Property::class, 'property_branch', 'branch_id');
    }

    public function openingHours(): HasMany
    {
        return $this->hasMany(BranchOpeningHours::class, 'branch_id', 'branch_id');
    }

    public function localAuthorityReferences(): HasMany
    {
        return $this->hasMany(LocalAuthorityBranchReference::class, 'branch_id', 'branch_id');
    }

    public function invoices(): HasMany
    {
        return $this->hasMany(AccountsInvoice::class, 'invoice_branch', 'branch_id');
    }

    public function invoiceCredits(): HasMany
    {
        return $this->hasMany(AccountsInvoiceCredit::class, 'invoice_credit_branch', 'branch_id');
    }

    public function tenantCharges(): HasMany
    {
        return $this->hasMany(AccountsTenantCharge::class, 'tenant_charge_branch', 'branch_id');
    }

    public function landlords(): HasMany
    {
        return $this->hasMany(Landlord::class, 'landlord_branch', 'branch_id');
    }

    public function valuations(): HasMany
    {
        return $this->hasMany(Valuation::class, 'valuation_branch', 'branch_id');
    }

    public function suburbs(): HasMany
    {
        return $this->hasMany(Suburb::class, 'suburb_branch', 'branch_id');
    }
}
