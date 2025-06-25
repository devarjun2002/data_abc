<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyDepositContributor extends Model
{
    protected $table = 'tenancy_deposit_contributor';
    protected $primaryKey = 'tenancy_deposit_contributor_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'tenancy_deposit_contributor_title',
        'tenancy_deposit_contributor_first_name',
        'tenancy_deposit_contributor_surname',
        'tenancy_deposit_contributor_amount',
        'tenancy_id'
    ];

    public function tenancy()
    {
        return $this->belongsTo(Tenancy::class, 'tenancy_id', 'tenancy_id');
    }
}
