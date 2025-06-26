<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValuationType extends Model
{
    protected $table = 'valuation_type';
    protected $primaryKey = 'valuation_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'valuation_type_name',
        'valuation_type_name2',
    ];
}
