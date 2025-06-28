<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyCondition extends Model
{
    protected $table = 'property_condition';
    protected $primaryKey = 'property_condition_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'property_condition_name',
    ];

    // Relationships --done
    public function valuations()
    {
        return $this->hasMany(Valuation::class, 'valuation_condition', 'property_condition_id');
    }
}
