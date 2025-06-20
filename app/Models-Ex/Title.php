<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $table = 'title';
    protected $primaryKey = 'title_id';
    public $timestamps = false;
    protected $fillable = ['title_name'];

    public function applicationApplicants()
    {
        return $this->hasMany(ApplicationApplicant::class, 'application_title', 'title_id');
    }
    public function applicationGuarantors()
    {
        return $this->hasMany(ApplicationGuarantor::class, 'application_guarantor_title', 'title_id');
    }
}
