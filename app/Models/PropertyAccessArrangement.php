<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyAccessArrangement extends Model
{
    protected $table = 'property_access_arrangement';
    protected $primaryKey = 'property_access_arrangement_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_access_arrangement_name',
        'property_access_arrangement_sort'
    ];
}
