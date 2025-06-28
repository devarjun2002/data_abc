<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    // Relationships --done
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(PropertyStatus::class, 'property_room_letting_status', 'property_status_id');
    }

    public function rentFrequency(): BelongsTo
    {
        return $this->belongsTo(PropertyRentFrequency::class, 'property_room_letting_rent_frequency', 'property_rent_frequency_id');
    }

    public function size(): BelongsTo
    {
        return $this->belongsTo(PropertyRoomLettingSize::class, 'property_room_letting_size', 'property_room_letting_size_id');
    }

    public function floor(): BelongsTo
    {
        return $this->belongsTo(PropertyFloor::class, 'property_room_letting_floor', 'property_floor_id');
    }

    public function furnished(): BelongsTo
    {
        return $this->belongsTo(PropertyFurnishedStatus::class, 'property_room_letting_furnished', 'property_furnished_status_id');
    }

    public function gender(): BelongsTo
    {
        return $this->belongsTo(Gender::class, 'property_room_letting_gender', 'gender_id');
    }
}
