<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DateRange extends Model
{
    protected $table = 'date_range';
    protected $primaryKey = 'date_range_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'date_range_name',
        'date_range_sort',
        'date_range_period',
        'date_range_date_format',
        'date_range_group'
    ];
}
