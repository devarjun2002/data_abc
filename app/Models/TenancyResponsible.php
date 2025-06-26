<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyResponsible extends Model
{
    protected $table = 'tenancy_responsible';
    protected $primaryKey = 'tenancy_responsible_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'tenancy_responsible_name',
    ];
}
