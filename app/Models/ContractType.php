<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContractType extends Model
{
    protected $table = 'contract_type';
    protected $primaryKey = 'contract_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'contract_type_name',
        'contract_type_description',
        'contract_type_sort'
    ];

    // Relationships --done
    public function valuations()
    {
        return $this->hasMany(Valuation::class, 'valuation_contract_type', 'contract_type_id');
    }
    // Reverse Relationships
public function properties()
    {
        return $this->hasMany(Property::class, 'property_contract_type', 'contract_type_id');
    }
}