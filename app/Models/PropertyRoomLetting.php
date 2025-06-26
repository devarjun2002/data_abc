<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyRoomLetting extends Model
{
    protected $table = 'property_room_letting';
    protected $primaryKey = 'property_room_letting_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_id',
        'property_room_letting_sort',
        'property_room_letting_status',
        'property_room_letting_rent',
        'property_room_letting_rent_frequency',
        'property_room_letting_deposit',
        'property_room_letting_size',
        'property_room_letting_floor',
        'property_room_letting_en_suite',
        'property_room_letting_furnished',
        'property_room_letting_available_from',
        'property_room_letting_gender',
        'property_room_letting_dob',
        'property_room_letting_profession',
    ];

    public function rentFrequency(): BelongsTo
    {
        return $this->belongsTo(PropertyRentFrequency::class, 'property_room_letting_rent_frequency', 'property_rent_frequency_id');
    }

    public function rents(): HasMany
    {
        return $this->hasMany(PropertyRoomLettingRent::class, 'property_room_letting_id', 'property_room_letting_id');
    }

    public function files(): HasMany
    {
        return $this->hasMany(PropertyRoomLettingFiles::class, 'property_room_letting_id', 'property_room_letting_id');
    }

    public function statusHistories(): HasMany
    {
        return $this->hasMany(PropertyRoomLettingStatusHistory::class, 'property_room_letting_id', 'property_room_letting_id');
    }
}
