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

    public function propertyToSecurity(): HasMany
    {
        return $this->hasMany(PropertyToSecurity::class, 'property_security_id', 'property_security_id');
    }
}
