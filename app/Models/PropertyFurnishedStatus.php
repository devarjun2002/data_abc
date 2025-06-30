<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyFurnishedStatus extends Model
{
    protected $table = 'property_furnished_status';
    protected $primaryKey = 'property_furnished_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_furnished_status_name',
        'property_furnished_status_rightmove',
    ];

    // Relationships --done
    public function propertyRoomLettings()
    {
        return $this->hasMany(PropertyRoomLetting::class, 'property_room_letting_furnished', 'property_furnished_status_id');
    }
    // Reverse Relationships
public function applicantRequirements()
    {
        return $this->hasMany(ApplicantRequirement::class, 'ar_property_furnished', 'property_furnished_status_id');
    }
}