<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyRenewalStatus extends Model
{
    protected $table = 'tenancy_renewal_status';
    protected $primaryKey = 'tenancy_renewal_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'tenancy_renewal_status_name',
        'tenancy_renewal_status_sort'
    ];
}
