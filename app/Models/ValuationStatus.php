<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValuationStatus extends Model
{
    protected $table = 'valuation_status';
    protected $primaryKey = 'valuation_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'valuation_status_name',
        'valuation_status_sort'
    ];

    // Relationships
    public function valuations()
    {
        return $this->hasMany(Valuation::class, 'valuation_status', 'valuation_status_id');
    }
}
