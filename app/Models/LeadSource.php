<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeadSource extends Model
{
    protected $table = 'lead_source';
    protected $primaryKey = 'lead_source_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'lead_source_name'
    ];
}
