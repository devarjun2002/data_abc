<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValuationAvailability extends Model
{
    protected $table = 'valuation_availability';
    protected $primaryKey = 'valuation_availability_id';
    public $timestamps = false;

    protected $fillable = [
        'valuation_availability_name',
        'valuation_availability_archived'
    ];

    protected $casts = [
        'valuation_availability_archived' => 'boolean'
    ];

    // Relationships
    public function valuations()
    {
        return $this->hasMany(Valuation::class, 'valuation_property_availability', 'valuation_availability_id');
    }
}
