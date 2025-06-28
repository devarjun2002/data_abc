<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IncomeFrequency extends Model
{
    protected $table = 'income_frequency';
    protected $primaryKey = 'income_frequency_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'income_frequency_name',
        'income_frequency_sort'
    ];
}
