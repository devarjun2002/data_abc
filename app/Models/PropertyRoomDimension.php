<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyRoomDimension extends Model
{
    protected $table = 'property_room_dimension';
    protected $primaryKey = 'property_room_dimension_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'property_room_dimension_name',
    ];
} 