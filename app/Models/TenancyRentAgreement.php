<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyRentAgreement extends Model
{
    protected $table = 'tenancy_rent_agreement';
    protected $primaryKey = 'tenancy_rent_agreement_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'tenancy_rent_agreement_name'
    ];

    // Add relationships once related models are created
}
