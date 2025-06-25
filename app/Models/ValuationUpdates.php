<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValuationUpdates extends Model
{
    protected $table = 'valuation_updates';
    protected $primaryKey = 'valuation_updates_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'valuation_updates_valuation_id',
        'valuation_updates_public_notes',
        'valuation_updates_private_notes',
        'valuation_updates_notify_landlord_vendor',
        'valuation_updates_date_created',
        'valuation_updates_created_by'
    ];

    public function valuation()
    {
        return $this->belongsTo(Valuation::class, 'valuation_updates_valuation_id', 'valuation_id');
    }

    public function valuation_updates_created_by()
    {
        return $this->belongsTo(Employee::class, 'valuation_updates_created_by', 'employee_id');
    }
}
