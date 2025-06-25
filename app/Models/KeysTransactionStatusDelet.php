<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeysTransactionStatusDelet extends Model
{
    use HasFactory;

    protected $table = 'keys_transaction_status_delet';
    protected $primaryKey = 'keys_transaction_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'keys_transaction_status_name',
        'keys_transaction_status_sort',
    ];
}
