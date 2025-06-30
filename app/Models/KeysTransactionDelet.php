<?php

namespace App\Models;
use App\Models\Employee;
use App\Models\Property;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeysTransactionDelet extends Model
{
    use HasFactory;

    protected $table = 'keys_transaction_delet';
    protected $primaryKey = 'keys_transaction_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'keys_transaction_date_created' => 'datetime',
        'keys_transaction_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'keys_transaction_property',
        'keys_transaction_quantity',
        'keys_transaction_to_person',
        'keys_transaction_to',
        'keys_transaction_out',
        'keys_transaction_due_in',
        'keys_transaction_in',
        'keys_transaction_notes',
        'keys_transaction_status',
        'keys_transaction_date_created',
        'keys_transaction_date_updated',
        'keys_transaction_created_by',
        'keys_transaction_updated_by',
    ];

    // Relationships --done
    public function property()
    {
        return $this->belongsTo(Property::class, 'keys_transaction_property', 'property_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'keys_transaction_created_by', 'employee_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'keys_transaction_updated_by', 'employee_id');
    }
}
