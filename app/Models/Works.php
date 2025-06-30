<?php

namespace App\Models;
use App\Models\Development;
use App\Models\Directory;
use App\Models\Employee;
use App\Models\Property;
use App\Models\WorksCategory;
use App\Models\WorksRoom;
use App\Models\WorksStatus;

use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    protected $table = 'works';
    protected $primaryKey = 'works_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'works_date_created' => 'datetime',
        'works_date_updated' => 'datetime',
        'works_date_last_instructed' => 'datetime',
        'works_date_last_awaiting_landlord_approval' => 'datetime',
        'works_date_last_awaiting_landlord_payment' => 'datetime',
        'works_date_last_pending' => 'datetime',
    ];
    
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

    // Relationships --done
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'works_created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'works_updated_by');
    }

    public function development()
    {
        return $this->belongsTo(Development::class, 'works_development');
    }

    public function property()
    {
        return $this->belongsTo(Property::class, 'works_property');
    }

    public function category()
    {
        return $this->belongsTo(WorksCategory::class, 'works_category');
    }

    public function contractor()
    {
        return $this->belongsTo(Directory::class, 'works_contractor');
    }

    public function status()
    {
        return $this->belongsTo(WorksStatus::class, 'works_status');
    }

    public function room()
    {
        return $this->belongsTo(WorksRoom::class, 'works_room');
    }
    // Reverse Relationships
public function accountsInvoiceLines()
    {
        return $this->hasMany(AccountsInvoiceLine::class, 'invoice_line_works_id', 'works_id');
    }
}