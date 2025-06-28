<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BulkEmailRecipient extends Model
{
    protected $table = 'bulk_email_recipient';
    protected $primaryKey = 'bulk_email_recipient_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'bulk_email_recipient_name',
        'bulk_email_recipient_type',
    ];
} 