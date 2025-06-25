<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyToHeating extends Model
{
    protected $table = 'property_to_heating';
    protected $primaryKey = 'property_to_heating_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'property_id',
        'property_heating_id',
    ];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }
}
