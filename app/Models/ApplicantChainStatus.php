<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicantChainStatus extends Model
{
    protected $table = 'applicant_chain_status';
    protected $primaryKey = 'applicant_chain_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'applicant_chain_status_name',
        'applicant_chain_status_sort'
    ];
}
