<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValuationAvailability extends Model
{
    protected $table = 'valuation_availability';
    protected $primaryKey = 'valuation_availability_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'valuation_availability_name',
        'valuation_availability_archived'
    ];

    // Relationships
    public function valuations()
    {
        return $this->hasMany(Valuation::class, 'valuation_property_availability', 'valuation_availability_id');
    }
}
