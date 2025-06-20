<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyTenureType extends Model
{
    protected $table = 'property_tenure_type';
    protected $primaryKey = 'property_tenure_type_id';
    public $timestamps = false;

    protected $fillable = [
        'property_tenure_type_name'
    ];

    // Relationships
    public function valuations()
    {
        return $this->hasMany(Valuation::class, 'valuation_tenure_type', 'property_tenure_type_id');
    }
}
