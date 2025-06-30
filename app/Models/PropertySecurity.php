<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertySecurity extends Model
{
    protected $table = 'property_security';
    protected $primaryKey = 'property_security_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_security_name',
    ];

    // Relationships --done
    public function propertyToSecurity()
    {
        return $this->hasMany(PropertyToSecurity::class, 'property_security_id', 'property_security_id');
    }
    // Reverse Relationships
public function propertyToSecurities()
    {
        return $this->hasMany(PropertyToSecurity::class, 'property_security_id', 'property_security_id');
    }
}