<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
    public function applicationApplicants()
    {
        return $this->hasMany(ApplicationApplicant::class, 'application_nationality', 'nationality_id');
    }

    public function applicationGuarantors()
    {
        return $this->hasMany(ApplicationGuarantor::class, 'application_guarantor_nationality', 'nationality_id');
    }
}

