<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyViewingType extends Model
{
    protected $table = 'property_viewing_type';
    protected $primaryKey = 'property_viewing_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_viewing_type_name',
        'property_viewing_type_description',
    ];

    public function properties(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_viewing_type', 'property_viewing_type_id');
    }
}
