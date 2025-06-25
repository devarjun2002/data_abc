<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValuationReason extends Model
{
    protected $table = 'valuation_reason';
    protected $primaryKey = 'valuation_reason_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'valuation_reason_name'
    ];

    // Relationships
    public function valuations()
    {
        return $this->hasMany(Valuation::class, 'valuation_reason', 'valuation_reason_id');
    }
}
