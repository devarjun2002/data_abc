<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsLandlordPayment extends Model
{
    protected $table = 'accounts_landlord_payment';
    protected $primaryKey = 'landlord_payment_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'landlord_payment_date' => 'datetime',
        'landlord_payment_date_created' => 'datetime',
        'landlord_payment_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'landlord_payment_date',
        'landlord_payment_tenancy_id',
        'landlord_payment_amount',
        'landlord_payment_method',
        'landlord_payment_notes',
        'landlord_payment_date_created',
        'landlord_payment_date_updated',
        'landlord_payment_created_by',
        'landlord_payment_updated_by'
    ];

    // Relationships --done
    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'landlord_payment_tenancy_id', 'tenancy_id');
    }

    public function paymentMethod(): BelongsTo
    {
        return $this->belongsTo(AccountsPaymentMethod::class, 'landlord_payment_method', 'payment_method_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'landlord_payment_created_by', 'employee_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'landlord_payment_updated_by', 'employee_id');
    }

    // Reverse relationships
    public function bacsFiles(): HasMany
    {
        return $this->hasMany(AccountsBacsFile::class, 'bacs_file_landlord_payment_reference', 'landlord_payment_id');
    }
}
