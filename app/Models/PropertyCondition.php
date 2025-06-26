<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyCondition extends Model
{
    protected $table = 'property_condition';
    protected $primaryKey = 'property_condition_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_condition_name',
    ];

    // Relationships
    public function properties(): HasMany
    {
        return $this->hasMany(Property::class, 'property_condition', 'property_condition_id');
    }

    public function valuations(): HasMany
    {
        return $this->hasMany(Valuation::class, 'valuation_condition', 'property_condition_id');
    }
}
