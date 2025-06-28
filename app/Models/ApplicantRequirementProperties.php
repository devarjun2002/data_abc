<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicantRequirementProperties extends Model
{
    protected $table = 'applicant_requirement_properties';
    protected $primaryKey = 'arp_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'arp_date_created' => 'datetime',
    ];

    protected $fillable = [
        'ar_id',
        'applicant_id',
        'property_id',
        'arp_date_created',
    ];
}
