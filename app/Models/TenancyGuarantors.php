<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyGuarantors extends Model
{
    protected $table = 'tenancy_guarantors';
    protected $primaryKey = 'tenancy_guarantors_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'guarantor_id',
        'tenancy_id',
    ];
}
