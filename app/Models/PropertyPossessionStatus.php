<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyPossessionStatus extends Model
{
    protected $table = 'property_possession_status';
    protected $primaryKey = 'property_possession_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_possession_status_name',
    ];
}
