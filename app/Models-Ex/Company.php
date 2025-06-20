<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [];

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_company', 'company_id', 'property_id');
    }
}
