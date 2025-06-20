<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyAccessArrangement extends Model
{
    protected $table = 'property_access_arrangement';
    protected $primaryKey = 'property_access_arrangement_id';
    public $timestamps = false;

    protected $fillable = [
        'property_access_arrangement_name',
        'property_access_arrangement_sort'
    ];

    // Add relationships once the related models are created
}
