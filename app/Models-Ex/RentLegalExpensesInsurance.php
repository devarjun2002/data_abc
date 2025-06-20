<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentLegalExpensesInsurance extends Model
{
    protected $table = 'rent_legal_expenses_insurance';
    protected $primaryKey = 'rent_legal_expenses_insurance_id';
    public $timestamps = false;
    protected $guarded = [];

    public function status()
    {
        return $this->belongsTo(RentLegalExpensesInsuranceStatus::class, 'rent_legal_expenses_insurance_status_id', 'rent_legal_expenses_insurance_status_id');
    }
    public function type()
    {
        return $this->belongsTo(RentLegalExpensesInsuranceType::class, 'rent_legal_expenses_insurance_type_id', 'rent_legal_expenses_insurance_type_id');
    }
}
