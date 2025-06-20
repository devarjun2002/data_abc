<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlarmCode extends Model
{
    protected $table = 'alarm_code';
    protected $primaryKey = 'alarm_code_id';
    public $timestamps = false;

    protected $fillable = [
        'alarm_code_property',
        'alarm_code_code',
        'alarm_code_type',
        'alarm_code_notes',
        'alarm_code_date_added',
        'alarm_code_created_by'
    ];

    protected $casts = [
        'alarm_code_date_added' => 'date'
    ];

    /**
     * Get the property this alarm code belongs to.
     */
    public function property()
    {
        return $this->belongsTo(Property::class, 'alarm_code_property');
    }

    /**
     * Get the type of this alarm code.
     */
    public function type()
    {
        return $this->belongsTo(AlarmCodeType::class, 'alarm_code_type');
    }

    /**
     * Get the employee who created this alarm code.
     */
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'alarm_code_created_by');
    }
}
