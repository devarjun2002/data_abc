<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyOfferSaleLogStatus extends Model
{
    protected $table = 'property_offer_sale_log_status';
    protected $primaryKey = 'property_offer_sale_log_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'property_offer_sale_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'property_offer_sale_id',
        'property_offer_sale_status_old',
        'property_offer_sale_status_new',
        'property_offer_sale_updated_by',
        'property_offer_sale_date_updated',
    ];

    // Relationships --done
    public function offerSale(): BelongsTo
    {
        return $this->belongsTo(PropertyOfferSale::class, 'property_offer_sale_id', 'property_offer_sale_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_offer_sale_updated_by', 'employee_id');
    }

    public function oldStatus(): BelongsTo
    {
        return $this->belongsTo(PropertyOfferStatus::class, 'property_offer_sale_status_old', 'property_offer_status_id');
    }

    public function newStatus(): BelongsTo
    {
        return $this->belongsTo(PropertyOfferStatus::class, 'property_offer_sale_status_new', 'property_offer_status_id');
    }
}
