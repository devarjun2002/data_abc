<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplicantRequirementPropertySubtype extends Model
{
    protected $table = 'applicant_requirement_property_subtype';
    protected $primaryKey = 'arps_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'ar_id',
        'arps_property_type_id',
    ];

    // Relationships --done
    public function requirement(): BelongsTo
    {
        return $this->belongsTo(ApplicantRequirement::class, 'applicant_requirement_property_subtype_requirement_id', 'applicant_requirement_id');
    }

    public function propertySubtype(): BelongsTo
    {
        return $this->belongsTo(PropertyType::class, 'applicant_requirement_property_subtype_type_id', 'property_type_id');
    }
}
