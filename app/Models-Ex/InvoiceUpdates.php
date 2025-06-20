<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceUpdates extends Model
{
    protected $table = 'invoice_updates';
    protected $primaryKey = 'invoice_updates_id';
    public $timestamps = false;
    protected $guarded = [];
}
