<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyRentFrequency extends Model
{
    protected $table = 'tenancy_rent_frequency';
    protected $primaryKey = 'tenancy_rent_frequency_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'tenancy_rent_frequency_name',
        'tenancy_rent_frequency_sort',
        'tenancy_rent_frequency_description',
        'tenancy_rent_frequency_short'
    ];
    // Reverse Relationships
public function tenancies()
    {
        return $this->hasMany(Tenancy::class, 'tenancy_insurance_payable', 'tenancy_rent_frequency_id');
    }
}