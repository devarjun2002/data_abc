<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SaleUpdates extends Model
{
    protected $table = 'sale_updates';
    protected $primaryKey = 'sale_updates_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'sale_updates_date_created' => 'datetime',
    ];

    protected $fillable = [
        'sale_updates_sale_id',
        'sale_updates_public_notes',
        'sale_updates_private_notes',
        'sale_updates_notify_vendor',
        'sale_updates_notify_buyer',
        'sale_updates_notify_vendor_solicitor_intermediary',
        'sale_updates_notify_buyer_solicitor_intermediary',
        'sale_updates_notify_vendor_solicitor',
        'sale_updates_notify_buyer_solicitor',
        'sale_updates_notify_vendor_mortgage_advisor',
        'sale_updates_notify_buyer_mortgage_advisor',
        'sale_updates_notify_sales_progression',
        'sale_updates_date_created',
        'sale_updates_created_by'
    ];

    // Relationships --done
    public function sale(): BelongsTo {
        return $this->belongsTo(Sale::class, 'sale_updates_sale_id', 'sale_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'sale_updates_created_by', 'employee_id');
    }
}
