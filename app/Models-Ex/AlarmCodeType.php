<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlarmCodeType extends Model
{
    protected $table = 'alarm_code_type';
    protected $primaryKey = 'alarm_code_type_id';
    public $timestamps = false;

    protected $fillable = [
        'alarm_code_type_name'
    ];

    /**
     * Get the alarm codes with this type.
     */
    public function alarmCodes()
    {
        return $this->hasMany(AlarmCode::class, 'alarm_code_type');
    }
}
