<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SaleLogStatus extends Model
{
    protected $table = 'sale_log_status';
    protected $primaryKey = 'sale_log_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'sale_id',
        'sale_status_old',
        'sale_status_new',
        'sale_updated_by',
        'sale_date_updated'
    ];

    public function sale(): BelongsTo {
        return $this->belongsTo(Sale::class, 'sale_id', 'sale_id');
    }

    public function updatedBy(): BelongsTo {
        return $this->belongsTo(Employee::class, 'sale_updated_by', 'employee_id');
    }
} 