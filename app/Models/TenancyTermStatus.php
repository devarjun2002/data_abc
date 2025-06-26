<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyTermStatus extends Model
{
    protected $table = 'tenancy_term_status';
    protected $primaryKey = 'tenancy_term_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'tenancy_term_status_name',
    ];
}
