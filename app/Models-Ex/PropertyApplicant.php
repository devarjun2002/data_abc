<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyApplicant extends Model
{
    protected $table = 'property_applicant';
    protected $primaryKey = 'property_applicant_id';
    public $timestamps = false;
    protected $fillable = [];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }
    public function applicant()
    {
        return $this->belongsTo(Applicant::class, 'applicant_id', 'applicant_id');
    }
}
