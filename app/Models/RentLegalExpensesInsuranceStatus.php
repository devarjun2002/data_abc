<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentLegalExpensesInsuranceStatus extends Model
{
    protected $table = 'rent_legal_expenses_insurance_status';
    protected $primaryKey = 'rleis_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'rleis_name',
        'rleis_sort',
    ];
    // Reverse Relationships
public function rentLegalExpensesInsurances()
    {
        return $this->hasMany(RentLegalExpensesInsurance::class, 'rlei_status', 'rleis_id');
    }
}