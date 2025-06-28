<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Directory extends Model
{
    protected $table = 'directory';
    protected $primaryKey = 'directory_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'directory_date_created' => 'datetime',
        'directory_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'directory_category',
        'directory_company_name',
        'directory_branch_name',
        'directory_contact_name',
        'directory_phone_work',
        'directory_phone_mobile',
        'directory_fax',
        'directory_email',
        'directory_website',
        'directory_dx',
        'directory_property_number_name',
        'directory_apartment_number_name',
        'directory_address_line_1',
        'directory_address_line_2',
        'directory_suburb',
        'directory_town_city',
        'directory_postcode',
        'directory_country',
        'directory_bank_name',
        'directory_bank_sort_code',
        'directory_bank_account_number',
        'directory_bank_account_name',
        'directory_status',
        'directory_notes',
        'directory_date_created',
        'directory_date_updated',
        'directory_created_by',
        'directory_updated_by',
        'directory_commission_scheme',
        'directory_commission_percentage',
        'directory_payment_terms',
        'directory_landlord_contractor',
        'directory_nominal_code',
        'directory_vat_rate',
        'directory_accounts_purposes_only',
    ];

    // Relationships --done
    public function bank()
    {
        return $this->belongsTo(Bank::class, 'directory_bank_name', 'bank_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'directory_country', 'country_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'directory_created_by', 'employee_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'directory_updated_by', 'employee_id');
    }

    public function nominalCode()
    {
        return $this->belongsTo(AccountsNominalCode::class, 'directory_nominal_code', 'nominal_code_id');
    }

    public function vatRate()
    {
        return $this->belongsTo(AccountsVatRate::class, 'directory_vat_rate', 'vat_rate_id');
    }

    public function category()
    {
        return $this->belongsTo(DirectoryCategory::class, 'directory_category', 'directory_category_id');
    }

    public function paymentTerms()
    {
        return $this->belongsTo(AccountsPaymentTerm::class, 'directory_payment_terms', 'accounts_payment_term_id');
    }

    public function landlordContractor()
    {
        return $this->belongsTo(Landlord::class, 'directory_landlord_contractor', 'landlord_id');
    }

    public function commissionScheme()
    {
        return $this->belongsTo(DirectoryCommissionScheme::class, 'directory_commission_scheme', 'directory_commission_scheme_id');
    }

    public function status()
    {
        return $this->belongsTo(DirectoryStatus::class, 'directory_status', 'directory_status_id');
    }
}
