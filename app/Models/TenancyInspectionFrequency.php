<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyInspectionFrequency extends Model
{
    protected $table = 'tenancy_inspection_frequency';
    protected $primaryKey = 'tenancy_inspection_frequency_id';
    public $timestamps = false;

    protected $fillable = [
        'tenancy_inspection_frequency_name',
        'tenancy_inspection_frequency_sort'
    ];

    protected $casts = [
        'tenancy_inspection_frequency_sort' => 'integer'
    ];

    /**
     * Get the tenancies that use this inspection frequency.
     */
    public function tenancies()
    {
        return $this->hasMany(Tenancy::class, 'tenancy_inspection_frequency');
    }
}
