<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RentLegalExpensesInsurance extends Model
{
    protected $table = 'rent_legal_expenses_insurance';
    protected $primaryKey = 'rlei_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'rlei_id',
        'rlei_policy_type',
        'rlei_tenancy_id',
        'property_id',
        'rlei_room_id',
        'rlei_policy_ref',
        'rlei_policy_start_date',
        'rlei_policy_end_date',
        'rlei_term',
        'rlei_term_unit',
        'rlei_notes',
        'rlei_status',
        'rlei_date_created',
        'rlei_date_updated',
        'rlei_created_by',
        'rlei_updated_by'
    ];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class, 'rlei_room_id', 'room_id');
    }

    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'rlei_tenancy_id', 'tenancy_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'rlei_created_by', 'employee_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'rlei_updated_by', 'employee_id');
    }
}
