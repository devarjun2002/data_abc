<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SelectiveLicencingLicenceHolder extends Model
{
    protected $table = 'selective_licencing_licence_holder';
    protected $primaryKey = 'selective_licencing_licence_holder_id';
    public $timestamps = false;
    protected $guarded = [];
    
    protected $fillable = [
        'selective_licencing_licence_holder_name',
    ];

    public function properties(): HasMany {
        return $this->hasMany(Property::class, 'property_selective_licencing_licence_holder', 'selective_licencing_licence_holder_id');
    }
}
