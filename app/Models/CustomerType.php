<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CustomerType extends Model
{
    protected $table = 'customer_type';
    protected $primaryKey = 'customer_type_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'customer_type_name',
        'customer_type_description',
        'customer_type_description2',
        'customer_type_description3',
        'customer_type_filename',
        'customer_type_url_search_parameter'
    ];

    // Relationships
    public function applicants(): HasMany
    {
        return $this->hasMany(Applicant::class, 'applicant_customer_type', 'customer_type_id');
    }

    public function landlords(): HasMany
    {
        return $this->hasMany(Landlord::class, 'landlord_customer_type', 'customer_type_id');
    }

    public function buyers(): HasMany
    {
        return $this->hasMany(Buyer::class, 'buyer_customer_type', 'customer_type_id');
    }

    public function vendors(): HasMany
    {
        return $this->hasMany(PropertyVendor::class, 'property_vendor_customer_type', 'customer_type_id');
    }
}
