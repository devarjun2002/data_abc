<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyAccessibility extends Model
{
    use HasFactory;

    protected $table = 'property_accessibility';
    protected $primaryKey = 'property_accessibility_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_accessibility_name',
    ];

    // Relationships
    public function propertyToAccessibilities(): HasMany
    {
        return $this->hasMany(PropertyToAccessibility::class, 'property_accessibility_id', 'property_accessibility_id');
    }
}
