<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyInspectionStatus extends Model
{
    protected $table = 'tenancy_inspection_status';
    protected $primaryKey = 'tenancy_inspection_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'tenancy_inspection_status_name',
    ];
}
