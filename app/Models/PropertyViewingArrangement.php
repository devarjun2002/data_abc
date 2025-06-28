<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyViewingArrangement extends Model
{
    protected $table = 'property_viewing_arrangement';
    protected $primaryKey = 'property_viewing_arrangement_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_viewing_arrangement_name',
    ];
}
