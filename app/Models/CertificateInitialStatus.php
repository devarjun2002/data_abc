<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificateInitialStatus extends Model
{
    protected $table = 'certificate_initial_status';
    protected $primaryKey = 'certificate_initial_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'certificate_initial_status_name',
        'certificate_initial_status_sort'
    ];
}
