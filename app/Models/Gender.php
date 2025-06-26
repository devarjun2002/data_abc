<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $table = 'gender';
    protected $primaryKey = 'gender_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'gender_name'
    ];

    public function applicants()
    {
        return $this->hasMany(Applicant::class, 'gender_id', 'gender_id');
    }
}
