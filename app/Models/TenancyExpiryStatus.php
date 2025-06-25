<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyExpiryStatus extends Model
{
    protected $table = 'tenancy_expiry_status';
    protected $primaryKey = 'tenancy_expiry_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'tenancy_expiry_status_name',
        'tenancy_expiry_status_sort'
    ];
}
