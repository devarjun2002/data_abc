<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValuationLogStatus extends Model
{
    protected $table = 'valuation_log_status';
    protected $primaryKey = 'valuation_log_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'valuation_id',
        'valuation_status_old',
        'valuation_status_new',
        'valuation_updated_by',
        'valuation_date_updated'
    ];

    public function valuation()
    {
        return $this->belongsTo(Valuation::class, 'valuation_id', 'valuation_id');
    }

    public function valuation_status_old()
    {
        return $this->belongsTo(ValuationStatus::class, 'valuation_status_old', 'valuation_status_id');
    }
    
}
