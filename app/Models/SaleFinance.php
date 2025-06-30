<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleFinance extends Model
{
    use HasFactory;

    protected $table = 'sale_finance';
    protected $primaryKey = 'sale_finance_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'sale_finance_name',
    ];
    // Reverse Relationships
public function propertyOfferSales()
    {
        return $this->hasMany(PropertyOfferSale::class, 'property_offer_sale_finance', 'sale_finance_id');
    }
}