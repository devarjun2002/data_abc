<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InsuranceStatus extends Model
{
    protected $table = 'insurance_status';
    protected $primaryKey = 'insurance_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'insurance_status_name'
    ];

    // Add relationships once related models are created
}
