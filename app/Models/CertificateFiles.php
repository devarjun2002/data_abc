<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificateFiles extends Model
{
    protected $table = 'certificate_files';
    protected $primaryKey = 'file_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'certificate_id',
        'filename',
        'date_added',
        'sort',
        'caption'
    ];

    public function certificate()
    {
        return $this->belongsTo(Certificate::class, 'certificate_id');
    }
}
