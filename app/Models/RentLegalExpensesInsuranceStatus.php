<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentLegalExpensesInsuranceStatus extends Model
{
    protected $table = 'rent_legal_expenses_insurance_status';
    protected $primaryKey = 'rleis_id';
    public $timestamps = false;
    protected $fillable = [];

    public function insurances()
    {
        return $this->hasMany(RentLegalExpensesInsurance::class, 'rent_legal_expenses_insurance_status_id', 'rent_legal_expenses_insurance_status_id');
    }
}
