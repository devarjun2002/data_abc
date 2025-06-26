<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeysAddFrom extends Model
{
    protected $table = 'keys_add_from';
    protected $primaryKey = 'keys_add_from_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'keys_add_from_name',
    ];
}
