<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComparisonPeriod extends Model
{
    protected $table = 'comparison_period';
    protected $primaryKey = 'comparison_period_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'comparison_period_name',
        'comparison_period_sort'
    ];
}
