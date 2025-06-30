<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyFixedTermUnit extends Model
{
    protected $table = 'tenancy_fixed_term_unit';
    protected $primaryKey = 'tenancy_fixed_term_unit_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'tenancy_fixed_term_unit_name',
    ];
    // Reverse Relationships
public function rentLegalExpensesInsurances()
    {
        return $this->hasMany(RentLegalExpensesInsurance::class, 'rlei_term_unit', 'tenancy_fixed_term_unit_id');
    }
}