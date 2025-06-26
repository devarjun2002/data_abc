<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Buyer extends Model
{
    protected $table = 'buyer';
    protected $primaryKey = 'buyer_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'buyer_date_created' => 'datetime',
        'buyer_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'buyer_token',
        'buyer_type',
        'buyer_title',
        'buyer_first_name',
        'buyer_surname',
        'buyer_trading_name',
        'buyer_company_name',
        'buyer_company_trading_name',
        'buyer_company_contact_name',
        'buyer_company_registration_number',
        'buyer_company_vat_registration_number',
        'buyer_company_reg_office_property_number_name',
        'buyer_company_reg_office_address_line_1',
        'buyer_company_reg_office_address_line_2',
        'buyer_company_reg_office_suburb',
        'buyer_company_reg_office_town_city',
        'buyer_company_reg_office_postcode',
        'buyer_company_reg_office_country',
        'buyer_phone_home',
        'buyer_phone_work',
        'buyer_phone_mobile',
        'buyer_fax',
        'buyer_email',
        'buyer_property_number_name',
        'buyer_apartment_number_name',
        'buyer_address_line_1',
        'buyer_address_line_2',
        'buyer_suburb',
        'buyer_town_city',
        'buyer_postcode',
        'buyer_country',
        'buyer_notes',
        'buyer_bank_name',
        'buyer_bank_sort_code',
        'buyer_bank_account_number',
        'buyer_bank_account_name',
        'buyer_online_account',
        'buyer_online_login_username',
        'buyer_online_login_password',
        'buyer_online_account_password_reset_token',
        'buyer_dob',
        'buyer_passport_number',
        'buyer_driving_licence_number',
        'buyer_nino',
        'buyer_date_created',
        'buyer_date_updated',
        'buyer_created_by',
        'buyer_updated_by',
        'buyer_solicitor_company',
        'buyer_solicitor_company_individual',
        'buyer_estate_agent_company',
        'buyer_estate_agent_company_individual',
        'buyer_branch',
        'buyer_source',
    ];

    public function solicitorCompany(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'buyer_solicitor_company', 'company_id');
    }

    public function solicitorCompanyIndividual(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'buyer_solicitor_company_individual', 'company_id');
    }

    public function estateAgentCompany(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'buyer_estate_agent_company', 'company_id');
    }

    public function estateAgentCompanyIndividual(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'buyer_estate_agent_company_individual', 'company_id');
    }

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'buyer_branch', 'branch_id');
    }

    public function source(): BelongsTo
    {
        return $this->belongsTo(Source::class, 'buyer_source', 'source_id');
    }
}
