<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyOutsideSpace extends Model
{
    protected $table = 'property_outside_space';
    protected $primaryKey = 'property_outside_space_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'property_outside_space_name',
        'property_outside_space_sort'
    ];

    // Relationships
    public function propertyToOutsideSpace(): HasMany
    {
        return $this->hasMany(PropertyToOutsideSpace::class, 'property_outside_space_id', 'property_outside_space_id');
    }
}
