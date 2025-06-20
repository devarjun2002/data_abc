<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleStatus extends Model
{
    protected $table = 'sale_status';
    protected $primaryKey = 'sale_status_id';
    public $timestamps = false;
    protected $guarded = [];

    public function sales()
    {
        return $this->hasMany(Sale::class, 'sale_status_id', 'sale_status_id');
    }
}
