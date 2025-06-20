<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyStatus extends Model
{
    protected $table = 'tenancy_status';
    protected $primaryKey = 'tenancy_status_id';
    public $timestamps = false;

    protected $fillable = [
        'tenancy_status_name'
    ];

    /**
     * Get the tenancies with this status.
     */
    public function tenancies()
    {
        return $this->hasMany(Tenancy::class, 'tenancy_status');
    }
}
