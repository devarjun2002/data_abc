<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolicyExpiryStatus extends Model
{
    use HasFactory;

    protected $table = 'policy_expiry_status';
    protected $primaryKey = 'policy_expiry_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'policy_expiry_status_name',
        'policy_expiry_status_sort',
    ];
}
