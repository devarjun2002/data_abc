<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeysTransaction extends Model
{
    protected $table = 'keys_transaction';
    protected $primaryKey = 'keys_transaction_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'keys_transaction_date_created' => 'datetime',
        'keys_transaction_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'keys_transaction_set_id',
        'keys_transaction_property',
        'keys_transaction_client_type',
        'keys_transaction_client',
        'keys_transaction_quantity',
        'keys_transaction_out',
        'keys_transaction_employee',
        'keys_transaction_notes',
        'keys_transaction_notes_private',
        'keys_transaction_in',
        'keys_transaction_in_employee',
        'keys_transaction_email_reminders',
        'keys_transaction_due_back',
        'keys_transaction_date_created',
        'keys_transaction_date_updated',
        'keys_transaction_created_by',
        'keys_transaction_updated_by'
    ];

    // Relationships --done
    public function clientType()
    {
        return $this->belongsTo(CustomerType::class, 'keys_transaction_client_type', 'customer_type_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'keys_transaction_created_by', 'employee_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'keys_transaction_employee', 'employee_id');
    }

    public function inEmployee()
    {
        return $this->belongsTo(Employee::class, 'keys_transaction_in_employee', 'employee_id');
    }

    public function property()
    {
        return $this->belongsTo(Property::class, 'keys_transaction_property', 'property_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'keys_transaction_updated_by', 'employee_id');
    }

    public function keySet()
    {
        return $this->belongsTo(KeysAdd::class, 'keys_transaction_set_id', 'keys_add_id');
    }
}
