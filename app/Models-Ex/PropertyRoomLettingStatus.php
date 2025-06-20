<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyRoomLettingStatus extends Model
{
    protected $table = 'property_room_letting_status';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [];

    // Add relationships here if you add foreign keys to letting, status, etc.
}
