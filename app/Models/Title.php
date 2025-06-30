<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $table = 'title';
    protected $primaryKey = 'title_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'title_name',
    ];
    // Reverse Relationships
public function tenancyDepositContributors()
    {
        return $this->hasMany(TenancyDepositContributor::class, 'tenancy_deposit_contributor_title', 'title_id');
    }
}