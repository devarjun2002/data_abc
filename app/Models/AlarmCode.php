<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlarmCode extends Model
{
    protected $table = 'alarm_code';
    protected $primaryKey = 'alarm_code_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'alarm_code_date_added' => 'datetime',
    ];

    protected $fillable = [
        'alarm_code_property',
        'alarm_code_code',
        'alarm_code_type',
        'alarm_code_notes',
        'alarm_code_date_added',
        'alarm_code_created_by'
    ];

    // Relationships --done
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'alarm_code_created_by', 'employee_id');
    }

    public function property() 
    {
        return $this->belongsTo(Property::class, 'alarm_code_property', 'property_id');
    }

    public function type()
    {
        return $this->belongsTo(AlarmCodeType::class, 'alarm_code_type', 'alarm_code_type_id'); 
    }
}
