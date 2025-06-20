<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlarmCodeDevelopment extends Model
{
    use HasFactory;

    protected $table = 'alarm_code_development';
    protected $primaryKey = 'alarm_code_id';
    public $timestamps = false;

    protected $fillable = [
        'alarm_code_development',
        'alarm_code_code',
        'alarm_code_type',
        'alarm_code_notes',
        'alarm_code_date_added',
        'alarm_code_created_by',
    ];

    protected $dates = [
        'alarm_code_date_added',
    ];

    public function development()
    {
        return $this->belongsTo(Development::class, 'alarm_code_development', 'development_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'alarm_code_created_by', 'employee_id');
    }
}
