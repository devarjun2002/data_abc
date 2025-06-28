<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SaleCollapsedReason extends Model
{
    protected $table = 'sale_collapsed_reason';
    protected $primaryKey = 'sale_collapsed_reason_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'sale_collapsed_reason_name',
    ];

    // Relationships --done
    public function sales(): HasMany {
        return $this->hasMany(Sale::class, 'sale_collapsed_reason_id', 'sale_collapsed_reason_id');
    }
}
