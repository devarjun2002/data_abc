<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleBuyers extends Model
{
    protected $table = 'sale_buyers';
    protected $primaryKey = 'sale_buyers_id';
    public $timestamps = false;
    protected $guarded = [];

    public function buyer()
    {
        return $this->belongsTo(Buyer::class, 'buyer_id', 'buyer_id');
    }
    public function sale()
    {
        return $this->belongsTo(Sale::class, 'sale_id', 'sale_id');
    }
}
