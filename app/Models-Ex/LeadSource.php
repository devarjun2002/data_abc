<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeadSource extends Model
{
    protected $table = 'lead_source';
    protected $primaryKey = 'lead_source_id';
    public $timestamps = false;
    protected $guarded = [];

    public function applicants()
    {
        return $this->hasMany(Applicant::class, 'lead_source_id', 'lead_source_id');
    }
    public function properties()
    {
        return $this->hasMany(Property::class, 'lead_source_id', 'lead_source_id');
    }
}
