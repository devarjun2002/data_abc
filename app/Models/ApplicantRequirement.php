<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApplicantRequirement extends Model
{
    protected $table = 'applicant_requirement';
    protected $primaryKey = 'ar_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'ar_date_created' => 'datetime',
        'ar_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'ar_token',
        'ar_active',    
        'ar_applicant_id',
        'ar_property_category',
        'ar_property_availability',
        'ar_property_type',
        'ar_property_min_price',
        'ar_property_max_price',
        'ar_property_min_bedrooms',
        'ar_property_max_bedrooms',
        'ar_property_furnished',
        'ar_property_shared',
        'ar_property_student',
        'ar_position',
        'ar_notes',
        'ar_branch',
        'ar_date_created',
        'ar_date_updated',
        'ar_created_by',
        'ar_updated_by'
    ];

    public function applicant(): BelongsTo
    {
        return $this->belongsTo(Applicant::class, 'ar_applicant_id', 'applicant_id');
    }

    public function propertyCategory(): BelongsTo
    {
        return $this->belongsTo(PropertyCategory::class, 'ar_property_category', 'property_category_id');
    }

    public function propertyAvailability(): BelongsTo
    {
        return $this->belongsTo(PropertyAvailability::class, 'ar_property_availability', 'property_availability_id');
    }

    public function propertyType(): BelongsTo
    {
        return $this->belongsTo(PropertyType::class, 'ar_property_type', 'property_type_id');
    }
}
