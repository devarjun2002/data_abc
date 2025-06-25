<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SaleFinance extends Model
{
    use HasFactory;

    protected $table = 'sale_finance';
    protected $primaryKey = 'sale_finance_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'sale_finance_name',
    ];
}
