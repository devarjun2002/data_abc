<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccountsTransaction extends Model
{
    protected $table = 'accounts_transaction';
    protected $primaryKey = 'transaction_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'transaction_date' => 'datetime',
        'transaction_due_date' => 'datetime',
        'transaction_date_created' => 'datetime',
        'transaction_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'transaction_nominal_code',
        'transaction_type',
        'transaction_customer_type',
        'transaction_customer',
        'transaction_date',
        'transaction_due_date',
        'transaction_reference',
        'transaction_details',
        'transaction_notes',
        'transaction_property',
        'transaction_development',
        'transaction_tenancy',
        'transaction_branch',
        'transaction_debit',
        'transaction_credit',
        'transaction_status',
        'transaction_date_created',
        'transaction_date_updated',
        'transaction_created_by',
        'transaction_updated_by'
    ];

    // Relationships
    public function nominalCode(): BelongsTo
    {
        return $this->belongsTo(AccountsNominalCode::class, 'transaction_nominal_code', 'nominal_code_id');
    }

    public function transactionType(): BelongsTo
    {
        return $this->belongsTo(AccountsTransactionType::class, 'transaction_type', 'transaction_type_id');
    }

    public function customerType(): BelongsTo
    {
        return $this->belongsTo(CustomerType::class, 'transaction_customer_type', 'customer_type_id');
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'transaction_customer', 'directory_id');
    }

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'transaction_property', 'property_id');
    }

    public function development(): BelongsTo
    {
        return $this->belongsTo(Development::class, 'transaction_development', 'development_id');
    }

    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'transaction_tenancy', 'tenancy_id');
    }

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'transaction_branch', 'branch_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'transaction_created_by', 'employee_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'transaction_updated_by', 'employee_id');
    }
}
