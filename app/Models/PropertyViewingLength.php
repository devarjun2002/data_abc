<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyViewingLength extends Model
{
    protected $table = 'property_viewing_length';
    protected $primaryKey = 'property_viewing_length_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'property_viewing_length_name',
        'property_viewing_length_minutes',
        'property_viewing_length_sort',
    ];

    public function properties(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_viewing_length', 'property_viewing_length_id');
    }
}
