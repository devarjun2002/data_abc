<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValuationLeadSource extends Model
{
    protected $table = 'valuation_lead_source';
    protected $primaryKey = 'valuation_lead_source_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'valuation_lead_source_name'
    ];

    // Relationships
    public function valuations()
    {
        return $this->hasMany(Valuation::class, 'valuation_lead_source', 'valuation_lead_source_id');
    }
}
