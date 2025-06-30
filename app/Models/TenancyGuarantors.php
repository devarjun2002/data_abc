<?php

namespace App\Models;
use App\Models\Guarantor;
use App\Models\Tenancy;

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

    // Relationships --done
    public function guarantor()
    {
        return $this->belongsTo(Guarantor::class, 'guarantor_id', 'guarantor_id');
    }

    public function tenancy()
    {
        return $this->belongsTo(Tenancy::class, 'tenancy_id', 'tenancy_id');
    }
}
