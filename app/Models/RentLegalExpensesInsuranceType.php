<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentLegalExpensesInsuranceType extends Model
{
    protected $table = 'rent_legal_expenses_insurance_type';
    protected $primaryKey = 'rleit_id';
    public $timestamps = false;
    protected $fillable = [];

    public function insurances()
    {
        return $this->hasMany(RentLegalExpensesInsurance::class, 'rent_legal_expenses_insurance_type_id', 'rent_legal_expenses_insurance_type_id');
    }
}
