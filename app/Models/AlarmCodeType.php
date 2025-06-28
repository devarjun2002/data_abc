<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlarmCodeType extends Model
{
    protected $table = 'alarm_code_type';
    protected $primaryKey = 'alarm_code_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'alarm_code_type_name'
    ];

    // Relationships --done
    public function alarmCodes()
    {
        return $this->hasMany(AlarmCode::class, 'alarm_code_type', 'alarm_code_type_id');
    }

    public function developmentAlarmCodes()
    {
        return $this->hasMany(AlarmCodeDevelopment::class, 'alarm_code_type', 'alarm_code_type_id');
    }
}
