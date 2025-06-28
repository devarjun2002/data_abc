<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeysAdd extends Model
{
    protected $table = 'keys_add';
    protected $primaryKey = 'keys_add_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'keys_add_date_created' => 'datetime',
        'keys_add_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'keys_add_property',
        'keys_add_from',
        'keys_add_quantity',
        'keys_add_notes',
        'keys_add_date_created',
        'keys_add_date_updated',
        'keys_add_created_by',
        'keys_add_updated_by'
    ];

    // Relationships --done
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'keys_add_created_by', 'employee_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'keys_add_updated_by', 'employee_id');
    }

    public function property()
    {
        return $this->belongsTo(Property::class, 'keys_add_property', 'property_id');
    }

    public function from()
    {
        return $this->belongsTo(KeysAddFrom::class, 'keys_add_from', 'keys_add_from_id');
    }
}
