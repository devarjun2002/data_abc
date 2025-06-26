<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyStatus extends Model
{
    protected $table = 'tenancy_status';
    protected $primaryKey = 'tenancy_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'tenancy_status_name',
    ];

}
