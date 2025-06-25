<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LocalAuthorityWard extends Model
{
    protected $table = 'local_authority_ward';
    protected $primaryKey = 'local_authority_ward_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'local_authority_ward_name',
        'local_authority_ward_selective_licencing',
        'local_authority_ward_selective_licencing_start_date',
        'local_authority_ward_selective_licencing_end_date',
        'local_authority_id'
    ];

    // Relationships
    public function localAuthority()
    {
        return $this->belongsTo(LocalAuthority::class, 'local_authority_id', 'local_authority_id');
    }
}
