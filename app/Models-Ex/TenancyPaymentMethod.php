<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyPaymentMethod extends Model
{
    protected $table = 'tenancy_payment_method';
    protected $primaryKey = 'tenancy_payment_method_id';
    public $timestamps = false;
    protected $guarded = [];

    public function tenancies()
    {
        return $this->hasMany(Tenancy::class, 'tenancy_payment_method_id', 'tenancy_payment_method_id');
    }
}
