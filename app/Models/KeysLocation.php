<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeysLocation extends Model
{
    protected $table = 'keys_location';
    protected $primaryKey = 'keys_location_id';
    public $timestamps = false;

    protected $fillable = [
        'keys_location_name'
    ];

    // Add relationships once related models are created
}
