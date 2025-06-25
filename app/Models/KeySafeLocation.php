<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeySafeLocation extends Model
{
    protected $table = 'key_safe_location';
    protected $primaryKey = 'key_safe_location_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'key_safe_location_name',
    ];

    public function keySafes()
    {
        return $this->hasMany(KeySafe::class, 'key_safe_location_id', 'key_safe_location_id');
    }
}
