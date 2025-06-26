<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyInspectionFrequency extends Model
{
    protected $table = 'tenancy_inspection_frequency';
    protected $primaryKey = 'tenancy_inspection_frequency_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'tenancy_inspection_frequency_name',
        'tenancy_inspection_frequency_sort'
    ];
}
