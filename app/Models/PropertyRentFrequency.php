<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyRentFrequency extends Model
{
    protected $table = 'property_rent_frequency';
    protected $primaryKey = 'property_rent_frequency_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_rent_frequency_name',
        'property_rent_frequency_sort',
        'property_rent_frequency_short'
    ];

    // Relationships
    public function properties(): HasMany
    {
        return $this->hasMany(Property::class, 'property_rent_frequency', 'property_rent_frequency_id');
    }

    public function applications(): HasMany
    {
        return $this->hasMany(Application::class, 'application_rent_frequency', 'property_rent_frequency_id');
    }

    public function propertyRoomLettings(): HasMany
    {
        return $this->hasMany(PropertyRoomLetting::class, 'property_room_letting_rent_frequency', 'property_rent_frequency_id');
    }
}
