<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyCategory extends Model
{
    protected $table = 'property_category';
    protected $primaryKey = 'property_category_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'property_category_name',
        'property_category_sort'
    ];

    // Relationships
    public function properties(): HasMany
    {
        return $this->hasMany(Property::class, 'property_category', 'property_category_id');
    }

    public function valuations(): HasMany
    {
        return $this->hasMany(Valuation::class, 'valuation_property_category', 'property_category_id');
    }
}
