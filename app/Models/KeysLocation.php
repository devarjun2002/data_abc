<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeysLocation extends Model
{
    protected $table = 'keys_location';
    protected $primaryKey = 'keys_location_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'keys_location_name'
    ];
    // Reverse Relationships
public function keysLogLocations()
    {
        return $this->hasMany(KeysLogLocation::class, 'keys_location', 'keys_location_id');
    }
}