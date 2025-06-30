<?php

namespace App\Models;
use App\Models\Country;

use Illuminate\Database\Eloquent\Model;

class LocalAuthority extends Model
{
    protected $table = 'local_authority';
    protected $primaryKey = 'local_authority_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'local_authority_selective_licencing_start_date' => 'datetime',
        'local_authority_selective_licencing_end_date' => 'datetime',
    ];

    protected $fillable = [
        'local_authority_name',
        'local_authority_housing_department_name',
        'local_authority_property_number_name',
        'local_authority_address_line_1',
        'local_authority_address_line_2',
        'local_authority_suburb',
        'local_authority_town_city',
        'local_authority_postcode',
        'local_authority_country',
        'local_authority_selective_licencing',
        'local_authority_selective_licencing_start_date',
        'local_authority_selective_licencing_end_date',
        'local_authority_selective_licencing_email_address'
    ];

    // Relationships --done
    public function country()
    {
        return $this->belongsTo(Country::class, 'local_authority_country', 'country_id');
    }
    // Reverse Relationships
public function localAuthorityWards()
    {
        return $this->hasMany(LocalAuthorityWard::class, 'local_authority_id', 'local_authority_id');
    }
}