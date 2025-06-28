<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalAuthorityBranchReference extends Model
{
    use HasFactory;

    protected $table = 'local_authority_branch_reference';
    protected $primaryKey = 'local_authority_branch_reference_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'local_authority_id',
        'branch_id',
        'local_authority_branch_reference',
    ];

    // Relationships --done
    public function localAuthority(): BelongsTo
    {
        return $this->belongsTo(LocalAuthority::class, 'local_authority_id', 'local_authority_id');
    }

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'branch_id', 'branch_id');
    }
}
