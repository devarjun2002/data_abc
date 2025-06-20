<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'application';
    protected $primaryKey = 'application_id';
    public $timestamps = false;
    protected $fillable = [];

    public function applicants()
    {
        return $this->hasMany(ApplicationApplicant::class, 'application_id', 'application_id');
    }
    public function guarantors()
    {
        return $this->hasMany(ApplicationGuarantor::class, 'application_id', 'application_id');
    }
    public function tasks()
    {
        return $this->hasMany(ApplicationTask::class, 'application_id', 'application_id');
    }
}
