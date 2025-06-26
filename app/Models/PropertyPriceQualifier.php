<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyPriceQualifier extends Model
{
    protected $table = 'property_price_qualifier';
    protected $primaryKey = 'price_qualifier_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'price_qualifier_name',
        'price_qualifier_name_short'
    ];

    // Relationships
    public function valuations()
    {
        return $this->hasMany(Valuation::class, 'valuation_price_qualifier', 'price_qualifier_id');
    }

    public function valuationsMarketed()
    {
        return $this->hasMany(Valuation::class, 'valuation_price_qualifier_marketed', 'price_qualifier_id');
    }
}
