<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $table = 'tenants';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [];

    public function propertyRoomLettings()
    {
        return $this->belongsToMany(PropertyRoomLetting::class, 'property_room_letting_tenant', 'tenant_id', 'property_room_letting_id');
    }
}
