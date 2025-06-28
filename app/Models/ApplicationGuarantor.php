<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplicationGuarantor extends Model
{
    protected $table = 'application_guarantor';
    protected $primaryKey = 'application_guarantor_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'application_guarantor_dob' => 'datetime',
    ];

    protected $fillable = [
        'application_id',
        'application_guarantor_title',
        'application_guarantor_first_name',
        'application_guarantor_surname',
        'application_guarantor_telephone_numbers',
        'application_guarantor_email_address',
        'application_guarantor_address_line_1',
        'application_guarantor_address_line_2',
        'application_guarantor_town_city',
        'application_guarantor_post_code',
        'application_guarantor_homeowner',
        'application_guarantor_dob',
        'application_guarantor_nino',
        'application_guarantor_employment_status',
        'application_guarantor_employment_nature',
        'application_guarantor_income',
        'application_guarantor_nationality',
        'application_guarantor_applicant_name'
    ];

    // Relationships --done
    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'application_guarantor_title', 'title_id');
    }

    public function application(): BelongsTo
    {
        return $this->belongsTo(Application::class, 'application_id', 'application_id');
    }

    public function employmentStatus(): BelongsTo
    {
        return $this->belongsTo(EmploymentStatus::class, 'application_guarantor_employment_status', 'employment_status_id');
    }

    public function nationality(): BelongsTo
    {
        return $this->belongsTo(Nationality::class, 'application_guarantor_nationality', 'nationality_id');
    }
}
