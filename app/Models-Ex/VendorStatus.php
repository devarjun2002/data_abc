<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VendorStatus extends Model
{
    protected $table = 'vendor_status';
    protected $primaryKey = 'vendor_status_id';
    public $timestamps = false;

    protected $fillable = [
        'vendor_status_name'
    ];

    // Relationships
    public function vendors()
    {
        return $this->hasMany(Vendor::class, 'vendor_status', 'vendor_status_id');
    }
}
