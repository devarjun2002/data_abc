<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyRentFrequency extends Model
{
    protected $table = 'property_rent_frequency';
    protected $primaryKey = 'property_rent_frequency_id';
    public $timestamps = false;

    protected $fillable = [
        'property_rent_frequency_name',
        'property_rent_frequency_sort',
        'property_rent_frequency_short'
    ];

    // Relationships
    public function propertyRoomLettings()
    {
        return $this->hasMany(PropertyRoomLetting::class, 'property_room_letting_rent_frequency', 'property_rent_frequency_id');
    }
}
