<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Nationality extends Model
{
    protected $table = 'nationality';
    protected $primaryKey = 'nationality_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];
    
    protected $fillable = [
        'nationality_name',
    ];

    // Relationships --done
    public function applicationApplicants(): HasMany
    {
        return $this->hasMany(ApplicationApplicant::class, 'application_nationality', 'nationality_id');
    }

    public function applicationGuarantors(): HasMany
    {
        return $this->hasMany(ApplicationGuarantor::class, 'application_guarantor_nationality', 'nationality_id');
    }
}

