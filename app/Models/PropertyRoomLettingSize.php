<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyRoomLettingSize extends Model
{
    protected $table = 'property_room_letting_size';
    protected $primaryKey = 'property_room_letting_size_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'property_room_letting_size_name',
    ];

    public function propertyRoomLettings(): HasMany
    {
        return $this->hasMany(PropertyRoomLetting::class, 'property_room_letting_size', 'property_room_letting_size_id');
    }
}
