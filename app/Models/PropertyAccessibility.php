<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    // Relationships --done
    public function propertyToAccessibilities()
    {
        return $this->hasMany(PropertyToAccessibility::class, 'property_accessibility_id', 'property_accessibility_id');
    }
}
