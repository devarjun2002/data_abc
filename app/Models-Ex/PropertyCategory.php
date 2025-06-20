<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyCategory extends Model
{
    protected $table = 'property_category';
    protected $primaryKey = 'property_category_id';
    public $timestamps = false;

    protected $fillable = [
        'property_category_name'
    ];

    // Relationships
    public function valuations()
    {
        return $this->hasMany(Valuation::class, 'valuation_property_category', 'property_category_id');
    }
}
