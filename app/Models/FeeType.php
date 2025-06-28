<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeeType extends Model
{
    protected $table = 'fee_type';
    protected $primaryKey = 'fee_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'fee_type_name'
    ];

    // Relationships --done
    public function vendorsSoleSale()
    {
        return $this->hasMany(Vendor::class, 'vendor_sole_sale_fee_type', 'fee_type_id');
    }

    public function vendorsMultiSale()
    {
        return $this->hasMany(Vendor::class, 'vendor_multi_sale_fee_type', 'fee_type_id');
    }

    public function valuationsSoleSale()
    {
        return $this->hasMany(Valuation::class, 'valuation_sale_fee_type', 'fee_type_id');
    }

    public function valuationsMultiSale()
    {
        return $this->hasMany(Valuation::class, 'valuation_multi_sale_fee_type', 'fee_type_id');
    }
}
