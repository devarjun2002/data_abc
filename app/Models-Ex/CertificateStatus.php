<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificateStatus extends Model
{
    protected $table = 'certificate_status';
    protected $primaryKey = 'certificate_status_id';
    public $timestamps = false;

    protected $fillable = [
        'certificate_status_name',
        'certificate_status_sort'
    ];
}
