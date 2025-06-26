<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyLostManagement extends Model
{
    protected $table = 'property_lost_management';
    protected $primaryKey = 'property_lost_management_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_lost_management_reason',
    ];

    // Relationships
    public function properties(): HasMany
    {
        return $this->hasMany(Property::class, 'property_lost_management', 'property_lost_management_id');
    }
}
