<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyRoomLetting extends Model
{
    protected $table = 'property_room_letting';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [];

    public function room()
    {
        return $this->belongsTo(PropertyRoom::class, 'property_room_id', 'property_room_id');
    }
    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'id');
    }
    public function tenants()
    {
        return $this->belongsToMany(Tenant::class, 'property_room_letting_tenant', 'property_room_letting_id', 'tenant_id');
    }
    public function rents()
    {
        return $this->hasMany(PropertyRoomLettingRent::class, 'property_room_letting_id', 'id');
    }
    public function files()
    {
        return $this->hasMany(PropertyRoomLettingFiles::class, 'property_room_letting_id', 'id');
    }
    public function statusHistories()
    {
        return $this->hasMany(PropertyRoomLettingStatusHistory::class, 'property_room_letting_id', 'id');
    }
}
