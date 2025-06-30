<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiscountGroup extends Model
{
    protected $table = 'discount_group';
    protected $primaryKey = 'discount_group_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'discount_group_name',
        'discount_group_sort'
    ];
    // Reverse Relationships
public function landlords()
    {
        return $this->hasMany(Landlord::class, 'landlord_discount_group', 'discount_group_id');
    }
}