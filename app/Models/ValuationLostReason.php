<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValuationLostReason extends Model
{
    protected $table = 'valuation_lost_reason';
    protected $primaryKey = 'valuation_lost_reason_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'valuation_lost_reason_name'
    ];

    // Relationships --done
    public function valuations()
    {
        return $this->hasMany(Valuation::class, 'valuation_lost_reason', 'valuation_lost_reason_id');
    }
}
