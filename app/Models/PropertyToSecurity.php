<?php

namespace App\Models;
use App\Models\Property;
use App\Models\PropertySecurity;

use Illuminate\Database\Eloquent\Model;

class PropertyToSecurity extends Model
{
    protected $table = 'property_to_security';
    protected $primaryKey = 'property_to_security_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_id',
        'property_security_id',
    ];

    // Relationships --done
    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }

    public function security()
    {
        return $this->belongsTo(PropertySecurity::class, 'property_security_id', 'property_security_id');
    }
}
