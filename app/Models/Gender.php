<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $table = 'gender';
    protected $primaryKey = 'gender_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'gender_name'
    ];
    // Reverse Relationships
public function propertyRoomLettings()
    {
        return $this->hasMany(PropertyRoomLetting::class, 'property_room_letting_gender', 'gender_id');
    }
}