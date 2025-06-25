<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificateDevelopmentFiles extends Model
{
    protected $table = 'certificate_development_files';
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

    public function certificateDevelopment()
    {
        return $this->belongsTo(CertificateDevelopment::class, 'certificate_id', 'certificate_development');
    }
}
