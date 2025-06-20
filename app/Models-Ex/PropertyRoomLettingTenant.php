<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyRoomLettingTenant extends Model
{
    protected $table = 'property_room_letting_tenant';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [];

    public function letting()
    {
        return $this->belongsTo(PropertyRoomLetting::class, 'property_room_letting_id', 'id');
    }
    public function tenant()
    {
        return $this->belongsTo(Tenant::class, 'tenant_id', 'id');
    }
}
