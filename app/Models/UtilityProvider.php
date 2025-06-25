<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UtilityProvider extends Model
{
    protected $table = 'utility_provider';
    protected $primaryKey = 'utility_provider_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'utility_provider_name',
    ];
}
