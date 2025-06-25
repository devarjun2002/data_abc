<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyHeating extends Model
{
    use HasFactory;

    protected $table = 'property_heating';
    protected $primaryKey = 'property_heating_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'property_heating_name',
        'property_heating_description',
        'property_heating_sort'
    ];

    // Relationships
    public function propertyToHeating(): HasMany
    {
        return $this->hasMany(PropertyToHeating::class, 'property_heating_id', 'property_heating_id');
    }
}
