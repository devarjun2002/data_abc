<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyAdditionalClauses extends Model
{
    protected $table = 'tenancy_additional_clauses';
    protected $primaryKey = 'tenancy_additional_clauses_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'tenancy_additional_clauses_description',
        'tenancy_id'
    ];

    public function tenancy()
    {
        return $this->belongsTo(Tenancy::class, 'tenancy_id', 'tenancy_id');
    }
}
