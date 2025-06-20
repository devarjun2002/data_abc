<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeySafe extends Model
{
    protected $table = 'key_safe';
    protected $primaryKey = 'key_safe_id';
    public $timestamps = false;
    protected $guarded = [];

    public function location()
    {
        return $this->belongsTo(KeySafeLocation::class, 'key_safe_location_id', 'key_safe_location_id');
    }

    public function properties()
    {
        return $this->hasMany(Property::class, 'key_safe_id', 'key_safe_id');
    }
}
