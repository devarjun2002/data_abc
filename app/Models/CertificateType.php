<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificateType extends Model
{
    use HasFactory;

    protected $table = 'certificate_type';
    protected $primaryKey = 'certificate_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'certificate_type_name',
        'certificate_type_property_field',
    ];

    public function certificateDevelopments()
    {
        return $this->hasMany(CertificateDevelopment::class, 'certificate_type', 'certificate_type_id');
    }
}
