<?php

namespace App\Models;
use App\Models\ApplicantRequirement;
use App\Models\PropertyType;

use Illuminate\Database\Eloquent\Model;

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
    public function applicantRequirement()
    {
        return $this->belongsTo(ApplicantRequirement::class, 'ar_id', 'ar_id');
    }
    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class, 'arps_property_type_id', 'property_type_id');
    }
}
