<?php

namespace App\Models;
use App\Models\AccountsPaymentMethod;
use App\Models\Employee;
use App\Models\Tenancy;

use Illuminate\Database\Eloquent\Model;

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
    public function tenancy()
    {
        return $this->belongsTo(Tenancy::class, 'landlord_payment_tenancy_id', 'tenancy_id');
    }

    public function paymentMethod()
    {
        return $this->belongsTo(AccountsPaymentMethod::class, 'landlord_payment_method', 'payment_method_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'landlord_payment_created_by', 'employee_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'landlord_payment_updated_by', 'employee_id');
    }
    // Reverse Relationships
public function accountsBacsFiles()
    {
        return $this->hasMany(AccountsBacsFile::class, 'bacs_file_landlord_payment_reference', 'landlord_payment_id');
    }
}