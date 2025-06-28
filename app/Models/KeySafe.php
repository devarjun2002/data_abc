<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KeySafe extends Model
{
    protected $table = 'key_safe';
    protected $primaryKey = 'key_safe_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'key_safe_date_added' => 'datetime',
    ];

    protected $fillable = [
        'key_safe_property',
        'key_safe_development',
        'key_safe_code',
        'key_safe_location',
        'key_safe_contains',
        'key_safe_notes',
        'key_safe_date_added',
        'key_safe_created_by'
    ];

    // Relationships --done
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'key_safe_created_by', 'employee_id');
    }

    public function development(): BelongsTo
    {
        return $this->belongsTo(Development::class, 'key_safe_development', 'development_id');
    }

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'key_safe_property', 'property_id');
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(KeySafeLocation::class, 'key_safe_location', 'key_safe_location_id');
    }
}
