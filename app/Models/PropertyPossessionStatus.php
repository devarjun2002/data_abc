<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyPossessionStatus extends Model
{
    protected $table = 'property_possession_status';
    protected $primaryKey = 'property_possession_status_id';
    public $timestamps = false;

    protected $fillable = [
        'property_possession_status_name'
    ];

    // This model will have relationships once we create the related models
    // Add relationships as they are created
}
