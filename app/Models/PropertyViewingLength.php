<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyViewingLength extends Model
{
    protected $table = 'property_viewing_length';
    protected $primaryKey = 'property_viewing_length_id';
    public $timestamps = false;

    protected $fillable = [
        'property_viewing_length_name',
        'property_viewing_length_minutes',
        'property_viewing_length_sort'
    ];

    // Add relationships once related models are created
}
