<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyDepositContributor extends Model
{
    protected $table = 'tenancy_deposit_contributor';
    protected $primaryKey = 'tenancy_deposit_contributor_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'tenancy_deposit_contributor_title',
        'tenancy_deposit_contributor_first_name',
        'tenancy_deposit_contributor_surname',
        'tenancy_deposit_contributor_amount',
        'tenancy_id'
    ];

    // Relationships --done
    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'tenancy_id', 'tenancy_id');
    }

    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'tenancy_deposit_contributor_title', 'title_id');
    }
}
