<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyLogPrice extends Model
{
    protected $table = 'property_log_price';
    protected $primaryKey = 'property_log_price_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'property_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'property_id',
        'property_price_old',
        'property_price_new',
        'property_published',
        'property_updated_by',
        'property_date_updated',
    ];

    // Relationships --done
    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'property_updated_by', 'user_id');
    }
}
