<?php

namespace App\Models;
use App\Models\Bank;
use App\Models\BodyType;
use App\Models\Branch;
use App\Models\Capacity;
use App\Models\Country;
use App\Models\DiscountGroup;
use App\Models\Employee;
use App\Models\LandlordNrlStatus;
use App\Models\LandlordStatus;
use App\Models\Title;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landlord extends Model
{
    use HasFactory;

    protected $table = 'landlord';
    protected $primaryKey = 'landlord_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'landlord_nrl_date' => 'datetime',
        'landlord_dob' => 'datetime',
        'landlord_date_created' => 'datetime',
        'landlord_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'landlord_token',
        'landlord_type',
        'landlord_title',
        'landlord_first_name',
        'landlord_surname',
        'landlord_trading_name',
        'landlord_company_name',
        'landlord_company_trading_name',
        'landlord_company_contact_name',
        'landlord_company_registration_number',
        'landlord_company_vat_registration_number',
        'landlord_company_reg_office_property_number_name',
        'landlord_company_reg_office_address_line_1',
        'landlord_company_reg_office_address_line_2',
        'landlord_company_reg_office_suburb',
        'landlord_company_reg_office_town_city',
        'landlord_company_reg_office_postcode',
        'landlord_company_reg_office_country',
        'landlord_phone_home',
        'landlord_phone_work',
        'landlord_phone_mobile',
        'landlord_fax',
        'landlord_email',
        'landlord_email_accounts',
        'landlord_email_works',
        'landlord_property_number_name',
        'landlord_apartment_number_name',
        'landlord_address_line_1',
        'landlord_address_line_2',
        'landlord_suburb',
        'landlord_town_city',
        'landlord_postcode',
        'landlord_country',
        'landlord_bank_name',
        'landlord_bank_sort_code',
        'landlord_bank_account_number',
        'landlord_bank_account_name',
        'landlord_bank_iban',
        'landlord_bank_bic_swift',
        'landlord_nrl_status',
        'landlord_nrl_tax_rate',
        'landlord_nrl_reference',
        'landlord_nrl_date',
        'landlord_status',
        'landlord_lead_source',
        'landlord_notes',
        'landlord_online_account',
        'landlord_online_login_username',
        'landlord_online_login_password',
        'landlord_online_account_password_reset_token',
        'landlord_lha',
        'landlord_pets',
        'landlord_smoking',
        'landlord_sharers',
        'landlord_contractors_use',
        'landlord_tenant_find_fee',
        'landlord_tenant_find_fee_type',
        'landlord_tenant_find_with_management_fee',
        'landlord_tenant_find_with_management_fee_type',
        'landlord_management_fee',
        'landlord_management_fee_type',
        'landlord_dob',
        'landlord_passport_number',
        'landlord_driving_licence_number',
        'landlord_nino',
        'landlord_branch',
        'landlord_solicitor_company',
        'landlord_mailing_list',
        'landlord_solicitor_company_individual',
        'landlord_works_notes',
        'landlord_fees_notes',
        'landlord_emails_new_invoice_credit',
        'landlord_emails_new_property_inspection',
        'landlord_emails_new_invoice',
        'landlord_emails_new_landlord_payment',
        'landlord_emails_edit_works',
        'landlord_emails_tenant_charge_chase',
        'landlord_emails_new_application',
        'landlord_emails_edit_application',
        'landlord_emails_new_viewing',
        'landlord_emails_edit_viewing',
        'landlord_emails_new_certificate_renewal',
        'landlord_emails_certificate_take_on_chase',
        'landlord_emails_selective_licence_chase',
        'landlord_emails_outstanding_invoice_balance_exceed_income',
        'landlord_bacs_file',
        'landlord_suspend_payments',
        'landlord_capacity',
        'landlord_deceased',
        'landlord_discount_group',
        'landlord_date_created',
        'landlord_date_updated',
        'landlord_created_by',
        'landlord_updated_by'
    ];

    // Relationships --done
    public function bank()
    {
        return $this->belongsTo(Bank::class, 'landlord_bank_name', 'bank_id');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'landlord_branch', 'branch_id');
    }

    public function regOfficeCountry()
    {
        return $this->belongsTo(Country::class, 'landlord_company_reg_office_country', 'country_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'landlord_country', 'country_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'landlord_created_by', 'employee_id');
    }

    public function title()
    {
        return $this->belongsTo(Title::class, 'landlord_title', 'title_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'landlord_updated_by', 'employee_id');
    }

    public function type()
    {
        return $this->belongsTo(BodyType::class, 'landlord_type', 'body_type_id');
    }

    public function nrlStatus()
    {
        return $this->belongsTo(LandlordNrlStatus::class, 'landlord_nrl_status', 'landlord_nrl_status_id');
    }

    public function status()
    {
        return $this->belongsTo(LandlordStatus::class, 'landlord_status', 'landlord_status_id');
    }

    public function capacity()
    {
        return $this->belongsTo(Capacity::class, 'landlord_capacity', 'capacity_id');
    }

    public function discountGroup()
    {
        return $this->belongsTo(DiscountGroup::class, 'landlord_discount_group', 'discount_group_id');
    }
    // Reverse Relationships
public function propertyLandlords()
    {
        return $this->hasMany(PropertyLandlord::class, 'property_landlord_id', 'landlord_id');
    }
}