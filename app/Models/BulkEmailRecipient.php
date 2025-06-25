<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BulkEmailRecipient extends Model
{
    protected $table = 'bulk_email_recipient';
    protected $primaryKey = 'bulk_email_recipient_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'bulk_email_id',
        'bulk_email_recipient_name',
        'bulk_email_recipient_type',
        'bulk_email_recipient_email',
        'bulk_email_recipient_sent',
        'bulk_email_recipient_date_sent',
        'bulk_email_recipient_notes',
        'buyer_id'
    ];

    // Relationships
    public function bulkEmail(): BelongsTo
    {
        return $this->belongsTo(BulkEmail::class, 'bulk_email_id', 'bulk_email_id');
    }

    public function buyer(): BelongsTo
    {
        return $this->belongsTo(Buyer::class, 'buyer_id', 'buyer_id');
    }
} 