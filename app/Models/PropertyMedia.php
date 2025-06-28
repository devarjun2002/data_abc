<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyMedia extends Model
{
    protected $table = 'property_media';
    protected $primaryKey = 'property_media_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_media_property_id',
        'property_media_type',
        'property_media_link',
    ];

    // Relationships --done
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_media_property_id', 'property_id');
    }
}
