<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suburb extends Model
{
    protected $table = 'suburb';
    protected $primaryKey = 'suburb_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'suburb_name',
        'suburb_description',
        'suburb_branch',
        'suburb_active',
        'suburb_property_requirements'
    ];

    // Relationships --done
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'suburb_branch', 'branch_id');
    }
}
