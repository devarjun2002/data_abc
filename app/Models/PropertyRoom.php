<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyRoom extends Model
{
    protected $table = 'property_room';
    protected $primaryKey = 'property_room_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_id',
        'property_room_name',
        'property_room_description',
        'property_room_length',
        'property_room_width',
        'property_room_dimension_unit',
        'property_room_dimension_text',
        'property_room_images_url',
        'property_room_sort',
    ];

    // Relationships
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }

    public function roomType(): BelongsTo
    {
        return $this->belongsTo(PropertyRoomType::class, 'property_room_type', 'property_room_type_id');
    }

    public function areaUnit(): BelongsTo
    {
        return $this->belongsTo(PropertyAreaUnit::class, 'property_room_area_unit', 'property_area_unit_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_room_created_by', 'employee_id');
    }

    public function features(): HasMany
    {
        return $this->hasMany(PropertyRoomFeature::class, 'property_room_id', 'property_room_id');
    }

    public function lettings(): HasMany
    {
        return $this->hasMany(PropertyRoomLetting::class, 'property_room_id', 'property_room_id');
    }

    public function dimensions(): HasMany
    {
        return $this->hasMany(PropertyRoomDimension::class, 'property_room_dimension_room_id', 'property_room_id');
    }
}
