<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplicationApplicant extends Model
{
    protected $table = 'application_applicant';
    protected $primaryKey = 'application_applicant_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'application_dob' => 'datetime',
    ];

    protected $fillable = [
        'application_id',
        'application_applicant_type',
        'application_homeowner',
        'application_title',
        'application_first_name',
        'application_surname',
        'application_telephone_numbers',
        'application_email_address',
        'application_dob',
        'application_nationality',
        'application_nino',
        'application_address_line_1',
        'application_address_line_2',
        'application_town_city',
        'application_post_code',
        'application_employment_status',
        'application_employment_nature',
        'application_income',
        'application_company_legal_name',
        'application_company_trading_name',
        'application_company_registration_number',
        'application_company_vat_registration_number',
        'application_company_title',
        'application_company_first_name',
        'application_company_surname',
        'application_company_telephone_numbers',
        'application_company_email_address',
        'application_company_ro_address_line_1',
        'application_company_ro_address_line_2',
        'application_company_ro_town_city',
        'application_company_ro_post_code'
    ];

    public function application(): BelongsTo
    {
        return $this->belongsTo(Application::class, 'application_id', 'application_id');
    }
    public function nationality(): BelongsTo
    {
        return $this->belongsTo(Nationality::class, 'application_nationality', 'nationality_id');
    }
    public function employmentStatus(): BelongsTo
    {
        return $this->belongsTo(EmploymentStatus::class, 'application_employment_status', 'employment_status_id');
    }
    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'application_title', 'title_id');
    }
    public function companyTitle(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'application_company_title', 'title_id');
    }
}
