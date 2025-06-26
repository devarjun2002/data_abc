<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValuationAppointmentType extends Model
{
    protected $table = 'valuation_appointment_type';
    protected $primaryKey = 'valuation_appointment_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'valuation_appointment_type_name',
        'valuation_appointment_type_subject',
        'valuation_appointment_type_sort'
    ];

    public function valuations()
    {
        return $this->hasMany(Valuation::class, 'valuation_appointment_type_id', 'valuation_appointment_type_id');
    }
}
