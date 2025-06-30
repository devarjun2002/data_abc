<?php

namespace App\Models;
use App\Models\Employee;
use App\Models\PropertyOfferSale;
use App\Models\PropertyOfferStatus;

use Illuminate\Database\Eloquent\Model;

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
    public function offerSale()
    {
        return $this->belongsTo(PropertyOfferSale::class, 'property_offer_sale_id', 'property_offer_sale_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'property_offer_sale_updated_by', 'employee_id');
    }

    public function oldStatus()
    {
        return $this->belongsTo(PropertyOfferStatus::class, 'property_offer_sale_status_old', 'property_offer_status_id');
    }

    public function newStatus()
    {
        return $this->belongsTo(PropertyOfferStatus::class, 'property_offer_sale_status_new', 'property_offer_status_id');
    }
}
