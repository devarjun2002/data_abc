<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    protected $table = 'works';
    protected $primaryKey = 'works_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'works_property',
        'works_development',
        'works_category',
        'works_contractor',
        'works_description',
        'works_outcome',
        'works_notes',
        'works_private_notes',
        'works_cancellation_reason',
        'works_contractor_quote',
        'works_contractor_cost',
        'works_agency_invoice_id',
        'works_status',
        'works_room',
        'works_reminders',
        'works_date_created',
        'works_date_updated',
        'works_date_last_instructed',
        'works_date_last_awaiting_landlord_approval',
        'works_date_last_awaiting_landlord_payment',
        'works_date_last_pending',
        'works_created_by',
        'works_updated_by'
    ];

    public function works_property()
    {
        return $this->belongsTo(Property::class, 'works_property', 'property_id');
    }

    public function works_development()
    {
        return $this->belongsTo(Development::class, 'works_development', 'development_id');
    }

    public function works_category()
    {
        return $this->belongsTo(WorksCategory::class, 'works_category', 'works_category_id');
    }
}
