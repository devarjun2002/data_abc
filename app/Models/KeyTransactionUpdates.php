<?php

namespace App\Models;
use App\Models\Employee;
use App\Models\KeysTransaction;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeyTransactionUpdates extends Model
{
    use HasFactory;

    protected $table = 'key_transaction_updates';
    protected $primaryKey = 'key_transaction_updates_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'key_transaction_updates_date_created' => 'datetime',
    ];

    protected $fillable = [
        'key_transaction_updates_keys_transaction_id',
        'key_transaction_updates_private_notes',
        'key_transaction_updates_date_created',
        'key_transaction_updates_created_by',
    ];

    // Relationships --done
    public function keysTransaction()
    {
        return $this->belongsTo(KeysTransaction::class, 'key_transaction_updates_keys_transaction_id', 'keys_transaction_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'key_transaction_updates_created_by', 'employee_id');
    }
}
