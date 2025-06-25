<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StandingOrderPaymentsFrequency extends Model
{
    protected $table = 'standing_order_payments_frequency';
    protected $primaryKey = 'standing_order_payments_frequency_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'standing_order_payments_frequency_name'
    ];
}
