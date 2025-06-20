<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiscountGroup extends Model
{
    protected $table = 'discount_group';
    protected $primaryKey = 'discount_group_id';
    public $timestamps = false;
    protected $guarded = [];
}
