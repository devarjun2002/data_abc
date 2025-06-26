<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferralType extends Model
{
    protected $table = 'referral_type';
    protected $primaryKey = 'referral_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'referral_type_name',
    ];

}
