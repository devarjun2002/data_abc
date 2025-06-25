<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyLeaseObligations extends Model
{
    protected $table = 'property_lease_obligations';
    protected $primaryKey = 'property_lease_obligations_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'property_lease_obligations_name',
        'property_lease_obligations_description',
        'property_lease_obligations_sort'
    ];

    // Relationships
    public function properties(): HasMany
    {
        return $this->hasMany(Property::class, 'property_lease_obligations', 'property_lease_obligations_id');
    }
}
