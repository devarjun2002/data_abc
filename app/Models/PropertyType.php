<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyType extends Model
{
    protected $table = 'property_type';
    protected $primaryKey = 'property_type_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'property_type_name',
        'property_type_group',
        'property_type_sort',
    ];

    public function properties(): HasMany
    {
        return $this->hasMany(Property::class, 'property_type', 'property_type_id');
    }

    public function propertyGroup(): BelongsTo
    {
        return $this->belongsTo(PropertyGroup::class, 'property_type_group', 'property_type_group_id');
    }
}
