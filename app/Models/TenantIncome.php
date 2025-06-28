<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenantIncome extends Model
{
    protected $table = 'tenant_income';
    protected $primaryKey = 'tenant_income_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'tenant_income_tenant_id',
        'tenant_income_amount',
        'tenant_income_frequency',
        'tenant_income_source'
    ];

    // Relationships --done
    public function tenant()
    {
        return $this->belongsTo(Tenant::class, 'tenant_income_tenant_id', 'tenant_id');
    }

    public function frequency()
    {
        return $this->belongsTo(IncomeFrequency::class, 'tenant_income_frequency', 'income_frequency_id');
    }
}
