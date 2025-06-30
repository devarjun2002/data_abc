<?php

namespace App\Models;
use App\Models\Employee;
use App\Models\Sale;
use App\Models\SaleStatus;

use Illuminate\Database\Eloquent\Model;

class SaleLogStatus extends Model
{
    protected $table = 'sale_log_status';
    protected $primaryKey = 'sale_log_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'sale_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'sale_id',
        'sale_status_old',
        'sale_status_new',
        'sale_updated_by',
        'sale_date_updated'
    ];

    // Relationships --done
    public function sale()
    {
        return $this->belongsTo(Sale::class, 'sale_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'sale_updated_by');
    }

    public function oldStatus()
    {
        return $this->belongsTo(SaleStatus::class, 'sale_status_old');
    }

    public function newStatus()
    {
        return $this->belongsTo(SaleStatus::class, 'sale_status_new');
    }
} 