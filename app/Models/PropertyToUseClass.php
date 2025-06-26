<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyToUseClass extends Model
{
    protected $table = 'property_to_use_class';
    protected $primaryKey = 'property_to_use_class_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_id',
        'property_use_class_id',
    ];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }
    public function useClass()
    {
        return $this->belongsTo(PropertyUseClass::class, 'property_use_class_id', 'property_use_class_id');
    }
}
