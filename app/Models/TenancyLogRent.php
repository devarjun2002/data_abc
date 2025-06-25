<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyLogRent extends Model
{
    protected $table = 'tenancy_log_rent';
    protected $primaryKey = 'tenancy_log_rent_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
       'tenancy_log_rent_tenancy_id',
       'tenancy_rent_old',
       'tenancy_rent_new',
       'tenancy_log_rent_notes',
       'tenancy_log_rent_date_updated',
       'tenancy_log_rent_updated_by'
    ];
}
