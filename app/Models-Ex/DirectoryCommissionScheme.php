<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DirectoryCommissionScheme extends Model
{
    protected $table = 'directory_commission_scheme';
    protected $primaryKey = 'directory_commission_scheme_id';
    public $timestamps = false;

    protected $fillable = [
        'directory_commission_scheme_name'
    ];

    // Relationships
    public function directories()
    {
        return $this->hasMany(Directory::class, 'directory_commission_scheme', 'directory_commission_scheme_id');
    }
}
