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

    // Reverse Relationships
public function tenancies()
    {
        return $this->hasMany(Tenancy::class, 'tenancy_status', 'tenancy_status_id');
    }
}