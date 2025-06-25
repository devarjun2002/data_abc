<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyUseClass extends Model
{
    protected $table = 'property_use_class';
    protected $primaryKey = 'property_use_class_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'property_use_class_name',
    ];

    public function propertyToUseClasses(): BelongsTo
    {
        return $this->belongsTo(PropertyToUseClass::class, 'property_use_class_id', 'property_use_class_id');
    }
}
