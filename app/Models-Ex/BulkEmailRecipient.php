<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BulkEmailRecipient extends Model
{
    protected $table = 'bulk_email_recipient';
    protected $primaryKey = 'bulk_email_recipient_id';
    public $timestamps = false;
    protected $guarded = [];

    public function bulkEmail()
    {
        return $this->belongsTo(BulkEmail::class, 'bulk_email_id', 'bulk_email_id');
    }
    public function buyer()
    {
        return $this->belongsTo(Buyer::class, 'buyer_id', 'buyer_id');
    }
}
