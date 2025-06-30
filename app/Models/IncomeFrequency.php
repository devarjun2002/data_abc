<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IncomeFrequency extends Model
{
    protected $table = 'income_frequency';
    protected $primaryKey = 'income_frequency_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'income_frequency_name',
        'income_frequency_sort'
    ];
    // Reverse Relationships
public function tenantIncomes()
    {
        return $this->hasMany(TenantIncome::class, 'tenant_income_frequency', 'income_frequency_id');
    }
}