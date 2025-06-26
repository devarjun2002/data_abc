<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsInvoicePayment extends Model
{
    protected $table = 'accounts_invoice_payment';
    protected $primaryKey = 'invoice_payment_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'invoice_payment_date' => 'datetime',
        'invoice_payment_date_created' => 'datetime',
        'invoice_payment_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'invoice_payment_date',
        'invoice_payment_amount',
        'invoice_payment_method',
        'invoice_payment_invoice_id',
        'invoice_payment_notes',
        'invoice_payment_type',
        'invoice_payment_type_id',
        'invoice_payment_use_balance',
        'invoice_payment_tenancy_id',
        'invoice_payment_date_created',
        'invoice_payment_date_updated',
        'invoice_payment_created_by',
        'invoice_payment_updated_by'
    ];

    // Relationships
    public function paymentMethod(): BelongsTo
    {
        return $this->belongsTo(AccountsPaymentMethod::class, 'invoice_payment_method', 'payment_method_id');
    }

    public function paymentType(): BelongsTo
    {
        return $this->belongsTo(AccountsInvoicePaymentType::class, 'invoice_payment_type', 'accounts_invoice_payment_type_id');
    }

    public function invoice(): BelongsTo
    {
        return $this->belongsTo(AccountsInvoice::class, 'invoice_payment_invoice_id', 'invoice_id');
    }

    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'invoice_payment_tenancy_id', 'tenancy_id');
    }

    // Reverse relationships
    public function bacsFiles(): HasMany
    {
        return $this->hasMany(AccountsBacsFile::class, 'bacs_file_invoice_payment_reference', 'invoice_payment_id');
    }
}
