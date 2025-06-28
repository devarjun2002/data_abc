<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SelectiveLicencingStatus extends Model
{
    protected $table = 'selective_licencing_status';
    protected $primaryKey = 'selective_licencing_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'selective_licencing_status_name',
        'selective_licencing_status_sort',
    ];
} 