<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValuationCondition extends Model
{
    protected $table = 'valuation_condition';
    protected $primaryKey = 'valuation_condition_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'valuation_condition_name',
        'valuation_condition_sort'
    ];

    // Relationships
    public function valuations()
    {
        return $this->hasMany(Valuation::class, 'valuation_condition', 'valuation_condition_id');
    }
}
