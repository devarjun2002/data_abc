<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyRoomLettingFiles extends Model
{
    protected $table = 'property_room_letting_files';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [];

    public function propertyRoomLetting()
    {
        return $this->belongsTo(PropertyRoomLetting::class, 'property_room_letting_id', 'id');
    }

    public function letting()
    {
        return $this->belongsTo(PropertyRoomLetting::class, 'property_room_letting_id', 'id');
    }
}
