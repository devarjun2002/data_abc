<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyOfferSaleAttachments extends Model
{
    protected $table = 'property_offer_sale_attachments';
    protected $primaryKey = 'property_offer_sale_attachments_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'property_offer_sale_attachments_date_created' => 'datetime',
    ];

    protected $fillable = [
        'property_offer_sale_id',
        'property_offer_sale_attachments_filename',
        'property_offer_sale_attachments_caption',
        'property_offer_sale_attachments_sort',
        'property_offer_sale_attachments_date_created',
        'property_offer_sale_attachments_created_by',
    ];

    // Relationships --done
    public function offerSale()
    {
        return $this->belongsTo(PropertyOfferSale::class, 'property_offer_sale_id', 'property_offer_sale_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'property_offer_sale_attachments_created_by', 'employee_id');
    }
}
