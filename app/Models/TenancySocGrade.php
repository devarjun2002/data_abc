<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancySocGrade extends Model
{
    protected $table = 'tenancy_soc_grade';
    protected $primaryKey = 'tenancy_soc_grade_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'tenancy_soc_grade_name',
        'tenancy_soc_grade_description',
        'tenancy_soc_grade_sort'
    ];
}
