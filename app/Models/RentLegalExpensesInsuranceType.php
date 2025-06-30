<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentLegalExpensesInsuranceType extends Model
{
    protected $table = 'rent_legal_expenses_insurance_type';
    protected $primaryKey = 'rleit_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'rleit_name',
    ];
    // Reverse Relationships
public function rentLegalExpensesInsurances()
    {
        return $this->hasMany(RentLegalExpensesInsurance::class, 'rlei_policy_type', 'rleit_id');
    }
}