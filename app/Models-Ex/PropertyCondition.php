<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyCondition extends Model
{
    protected $table = 'property_condition';
    protected $primaryKey = 'property_condition_id';
    public $timestamps = false;

    protected $fillable = [
        'property_condition_name'
    ];

    // Add relationships once the related models are created
}
